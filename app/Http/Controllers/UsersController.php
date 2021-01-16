<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
	public function data()
	{
		$users = DB::table('users')->get();
		return view('users.user', compact('users'));
	}

	public function add()
	{
		return view('users/add');
	}

	public function addProcess(Request $request)
	{
		DB::table('users')->insert([
			'role_id' => 2, 
			'name' => $request->name,
			'username' => $request->username,
			'email' => $request->email,
			'password' => $request->password,

		]);
		return redirect('user')->with('status', 'User Berhasil ditambah');
	}

	public function edit($id)
	{
		$user = DB::table('users')->where('id', $id)->first();
		return view('users.edit', compact('user'));
	}

	public function editProcess(Request $request, $id)
	{
		$user = DB::table('users')->where('id', $id)
		->update([
			'role_id' => 2, 
			'name' => $request->name,
			'username' => $request->username,
			'email' => $request->email,
			'password' => $request->password,
		]);	
		return redirect('user')->with('status', 'User Berhasil diedit');
	}

	public function delete($id)
	{
		DB::table('users')->where('id', $id)->delete();
		return redirect('user')->with('status', 'User Berhasil dihapus');
	}
}
