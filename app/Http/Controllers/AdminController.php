<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function adminView()
    {
        $artists = Artist::all();
        $genres = Genre::all();
        $users = Auth::user();
        $albums = Album::all();
        if ($users->is_admin == true) {
            return view('admin', compact('artists', 'albums', 'genres'));
        }
    }

    public function add(Request $request)
    {
        $artist = new Artist($request->all());
        $artist->save();

        $album = new Album($request->all('album_name'));
        $album->save();

        $genre = new Genre();
        $genre->genre = $request->genre;
        $genre->save();

        return redirect()->back();
    }

    public function delete(Request $request)
    {
        if($request->get('artist')){
            $artist = new Artist(($request->all));
            $artist->delete();
        }
        if($request->get('album')){
            $album = new Artist(($request->all));
            $album->delete();
        }
        if($request->get('genre')){
            $genre = new Artist(($request->all));
            $genre->delete();
        }
    }


}

