<?php

namespace App\Http\Controllers\Movie;

use App\Http\Controllers\Controller;
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
                'films_lenght' => $data['films_lenght'],
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
    public function delete($films_id)
    {
        Session()->flash('deletecheck');
        DB::table('films')->where('films', $films_id)->delete();
        return redirect()->route('movies');
    }
}
