<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name'
    ];
    public $timestamps = false;



    public function album(){
        return $this->hasMany(Album::class);
    }
    public function genre(){
        return $this->belongsToMany(Genre::class);
    }
}
