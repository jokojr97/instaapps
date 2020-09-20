<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailUser extends Model
{
    use HasFactory;

    protected $fillable = ['id_user', 'tanggal_lahir', 'foto_profile', 'alamat', 'telpon'];

    public function details(){
        return $this->hasOne('App\Models\User', 'id', 'id_user');	
    }

    
}
