<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profil_user';
    protected $fillable = ['id','nama_lengkap','gender','user_id','tgl_lahir','alamat','portofolio','pekerjaan','foto_profil'];

    public function user()
    {
    	return $this->hasOne(User::class);
    }
}
