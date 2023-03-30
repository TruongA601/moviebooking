<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class movieController extends Controller
{

    public function movies()
    {
        // $this->checkauth();
        $films = Movie::all();
        return view('admin.movies.movie', compact('films'));
    }
    public function viewupdate($films_id)
    {
        $films = Movie::where('films_id', $films_id)->get();
        $genre = Genre::all();
        return view('admin.movies.update', compact('films', 'genre'));
    }
    public function viewadd(Request $request)
    {
        $genre = Genre::all();
        return view('admin.movies.add', compact('genre'));
    }

    public function update(Request $request, $films_id)
    {
        $data = $request->all();
        $films = Movie::find($films_id);
        if ($request->hasFile('films_poster')) {
            $destination = 'public/uploads/movies' . $films->films_poster;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $imageName = time() . '.' . $request->films_poster->extension();
            $imageName = $request->file('films_poster')->getClientOriginalName();
            $request->films_poster->move(public_path('uploads/movies'), $imageName);
            $films->films_poster = $imageName;
        }
        $films->update([
            'films_name' => $data['films_name'],
            'films_length' => $data['films_length'],
            'films_trailer' => $data['films_trailer'],
            'films_description' => $data['films_description'],
            'films_release' => $data['films_release'],
            'films_genre' => implode(',', $data['films_genre'])
        ]);
        return back()->with('update_success', 'successfully updated');
    }

    public function add(Request $request)
    {
        $request->validate([
            'films_poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time() . '.' . $request->films_poster->extension();
        $imageName = $request->file('films_poster')->getClientOriginalName();
        $request->films_poster->move(public_path('uploads/movies'), $imageName);
        $films = new Movie();
        $films->films_name = $request->films_name;
        $films->films_poster = $imageName;
        $films->films_length = $request->films_length;
        $films->films_trailer = $request->films_trailer;
        $films->films_description = $request->films_description;
        $films->films_release = $request->films_release;
        $films->films_genre = implode(',', $request->films_genre);
        $films->save();
        return redirect()->route('movies')->with('add_success', 'Thêm thành công');
    }
    public function delete($films_id)
    {
        Session()->flash('deletecheck');
        DB::table('films')->where('films_id', $films_id)->delete();
        return back();
    }
}
