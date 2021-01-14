<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistController extends Controller
{
    public function artists(){
        $artists = DB::table('artists')->get();
        return view('artists')->with('artists',$artists);
    }
    public function artist($id){
        $artist_album = Album::get();
        $artist = Artist::where('id',$id)->get();
        //dd($artist_album);
//        return view('artist')->with('artist',$artist);
        return view('artist', compact('artist_album'))->with('artist',$artist);
       // )->with('artist',$artist);
    }
}
