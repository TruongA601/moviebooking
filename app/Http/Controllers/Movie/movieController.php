<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class movieController extends Controller
{

    public function movies()
    {
        // $this->checkauth();
        $films = DB::table('films')->select('*');
        $films = $films->get();

        return view('admin.movies.movie', compact('films'));
    }
    public function viewupdate($films_id)
    {
        $films = DB::table('films')->where('films_id', $films_id)->select();
        $films = $films->get();
        return view('admin.movies.update', compact('films'));
    }
    public function viewadd(Request $request)
    {
        return view('admin.movies.add');
    }
 
    public function update($films_id, Request $request)
    {
        $data = $request->all();

        $films = DB::table('films')->where('films_id', $films_id)
            ->update([
                'films_name' => $data['films_name'],
                // 'films_poster' => $data['films_poster'],
                'films_length' => $data['films_length'],
                'films_trailer' => $data['films_trailer'],
                'films_description' => $data['films_description'],
                'films_release' => $data['films_release'],
                'films_genre' => $data['films_genre']
            ]);
        $films = DB::table('films')->where('films_id', $films_id)->select();
        $films = $films->get();

        Session()->flash('success', 'Update successfull');
        return view('admin.movies.update', compact('films'));
    }

    public function add(Request $request)
    {

        $request->validate([
            'films_poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->films_poster->extension();  
        $imageName = $request->file('films_poster')->getClientOriginalName();
        $request->films_poster->move(public_path('uploads/movies'), $imageName);

        
        $films = new Movie();
        $films->films_name = $request->films_name;
        $films->films_poster = $imageName;
        $films->films_length = $request->films_length;
        $films->films_trailer = $request->films_trailer;
        $films->films_description = $request->films_description;
        $films->films_release = $request->films_release;
        $films->films_genre = $request->films_genre;

        session()->flash('add_success', 'Thêm thành công');
        $films->save();
        return redirect()->route('movies');

    }
    public function delete($films_id)
    {
        Session()->flash('deletecheck');
        DB::table('films')->where('films_id', $films_id)->delete();
        return back();
    }
}
