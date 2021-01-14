<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function artist(){
        return $this->belongsToMany(Artist::class);
    }
    public function album(){
        return $this->belongsToMany(Album::class);
    }
}
