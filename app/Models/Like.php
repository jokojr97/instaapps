<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = ['id_user', 'id_post', 'is_active'];

    public function posts(){
        return $this->hasOne('App\Models\Post', 'id', 'id_post');	
    }

    public function comments(){
        return $this->hasOne('App\Models\Comment', 'id', 'id_comment');	
    }
}
