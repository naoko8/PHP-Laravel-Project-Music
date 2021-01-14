<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumController extends Controller
{
    public function albums(){
        $albums = DB::table('albums')->get();
        return view('albums')->with('albums',$albums);
    }

    public function album($id){
        $album = Album::where('id',$id)->get();
        return view('album')->with('album',$album);
    }
}
