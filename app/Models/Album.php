<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public $timestamps = false;


    protected $fillable = [
        'artist_id',
        'album_name'
    ];
    public function artist(){
        return $this->belongsTo(Artist::class);
    }
    public function genre(){
        return $this->belongsToMany(Genre::class);
    }
}
