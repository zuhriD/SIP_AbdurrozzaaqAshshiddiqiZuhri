<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Profile;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
	public function data()
	{
		$users = DB::table('users')->paginate(5);
		return view('users.user', compact('users'));
	}

	public function add()
	{
		return view('users/add');
	}

	public function exportData()
	{

		return Excel::download(new UsersExport(), 'User.xlsx');
	}

	public function addProcess(Request $request)
	{	
		
		DB::table('users')->insert([
			'role_id' => 2, 
			'name' => $request->name,
			'username' => $request->username,
			'email' => $request->email,
			'remember_token' => Str::random(10),
			'password' => Hash::make($request->password),

		]);
		return redirect('user')->with('status', 'User Berhasil ditambah');
	}

	public function edit($id)
	{
		$user = DB::table('users')->where('id', $id)->first();
		$profil = DB::table('profil_user')->where('user_id', $id)->first();
		return view('users.edit', compact('user','profil'));
	}

	public function editProcess(Request $request, $id)
	{
		$user = DB::table('users')->where('id', $id)
		->update([
			'role_id' => 2, 
			'name' => $request->name,
			'username' => $request->username,
			'email' => $request->email,
			'remember_token' =>  Str::random(10),
			'password' => Hash::make($request->password)
		]);	
		
		return redirect('user')->with('status', 'User Berhasil diedit');
	}

	public function delete($id)
	{
		DB::table('users')->where('id', $id)->delete();
		return redirect('user')->with('status', 'User Berhasil dihapus');
	}
	    public function editView()
    {
    	$user = DB::table('profil_user')->where('user_id', session('id'))->first();
        return view('users.editProfil', compact('user'));
    }
    public function import(Request $request)
    {
    	$file = $request->file('import');
    	Excel::import(new UsersImport, $file);
    	return back()->withStatus('Excel file imported succesfully');
    }
}
