<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['id_user', 'id_post', 'comment'];
    public function posts(){
        return $this->belongsToMany('App\Models\Post', 'id_post', 'id');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User', 'id_user', 'id');
    }

    public function detailusers(){
        return $this->belongsToMany('App\Models\DetailUser', 'id_user', 'id_user');
    }
}
