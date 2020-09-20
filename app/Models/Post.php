<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['id_user', 'text', 'image', 'lokasi'];

    public function lks(){
        return $this->belongsToMany('App\Models\Like', 'posts', 'id', 'id');
    }

    public function lkss(){
        return $this->hasMany('App\Models\Like', 'id_post', 'id');
    }    

    public function likeuser(){
        return $this->hasManyThrough('App\Models\User', 'App\Models\Like',  'id_post', 'id', 'id', 'id_user');
    }    

    public function comments(){
        return $this->belongsToMany('App\Models\Comment', 'post', 'id', 'id');
    }

    public function detailusers(){
        return $this->hasOne('App\Models\DetailUser', 'id_user', 'id_user'); 
    }

    public function users(){
        return $this->hasOne('App\Models\User', 'id', 'id_user'); 
    }
}
