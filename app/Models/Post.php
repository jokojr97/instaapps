<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function likes(){
        return $this->belongsToMany('App\Models\Like', 'id', 'id_like');
    }
    public function comments(){
        return $this->belongsToMany('App\Models\Comment', 'id', 'id_comment');
    }
}
