<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleUsers extends Model
{
    protected $table = "role_user";
    protected $fillable = ['role_id', 'user_id'];

    public function users(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    
    public function roles(){
        return $this->belongsTo('App\Models\Role', 'role_id', 'id');
    }
    
}
