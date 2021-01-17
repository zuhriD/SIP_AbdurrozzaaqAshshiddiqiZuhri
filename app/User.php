<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
     protected $table = 'users';
     protected $fillable = [
        'name',
        'id',
        'email',
        'password',
        'role_id',
    ];
   public function profil()
   {
   		return $this->belongsTo(Profile::class);
   }

}
