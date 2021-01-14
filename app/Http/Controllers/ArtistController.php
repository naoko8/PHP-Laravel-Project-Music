<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistController extends Controller
{
    public function artists(){
        $artists = Artist::all();
        return view('artists', compact('artists'));
    }

    public function artist(Artist $id){
//        $artist_album = Album::get();
//        $artist = Artist::where('id', $id)->get();
        //dd($artist_album);
//        return view('artist')->with('artist',$artist);
        return view('artist', compact('id'));
       // )->with('artist',$artist);
    }
}
