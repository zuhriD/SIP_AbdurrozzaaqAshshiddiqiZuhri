<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AuthController extends Controller
{
    public function login()
    {
    	return view('login',['title' => 'Zuhri Admin']);
    }

    public function register()
    {
    	return view('registrasi',['title' => 'Zuhri Admin']);
    }

    public function loginProcess(Request $request)
    {
    	$user = DB::table('users')->where('username', $request->username)->first();
    	if ($user) {
    		if (Hash::check($request->password,$user->password)) {
                 $jml=DB::table('users')->get()->count();
    			session(['berhasil_login'=> true,
    					 'nama'=>$user->name,
                         'id' =>$user->id,
    					 'role_id'=> $user->role_id,
                         'jml'=>$jml
    					]);
               
    			 $prof = DB::table('profil_user')->where('user_id', $user->id)->first();
              return view('home', compact('prof'));
    		}
    	}
    	return redirect('/')->with('pesan','Username Atau Password Salah');

    }

    public function logout(Request $request)
    {
    	$request->session()->flush();
    	return redirect('/');
    }

    public function registerProcess(Request $request)
    {
    	 DB::table('users')->insert([
			'role_id' => 2, 
			'name' => $request->name,
			'username' => $request->username,
			'email' => $request->email,
			'password' => Hash::make($request->password),
			'remember_token' => Str::random(10)
		]);
	

		return redirect('/')->with('pesan', 'User Berhasil ditambah');
    }
}
