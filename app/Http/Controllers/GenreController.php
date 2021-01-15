<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    public function genres(){
        $genres = DB::table('genres')->get();
        return view('genres')->with('genres',$genres);
    }
    public function genre($id){
        $genre = Genre::where('id',$id)->get();
        return view('genre')->with('genre',$genre);
    }
}
