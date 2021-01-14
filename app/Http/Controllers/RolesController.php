<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{
	public function data()
	{
		$roles = DB::table('roles')->get();
		return view('roles.data', compact('roles'));
	}
	public function add()
	{
		return view('roles/add');
	}

	public function addProcess(Request $request)
	{
		DB::table('roles')->insert([
			'name' => $request->name,
			'created_at' => date('Y-m-d H:i:s'),
			'update_at' => date('Y-m-d H:i:s')

		]);
		return redirect('role')->with('status', 'Role Berhasil ditambah');
	}

	public function edit($id)
	{
		$role = DB::table('roles')->where('id', $id)->first();
		return view('roles.edit', compact('role'));
	}

	public function editProcess(Request $request, $id)
	{
		$role = DB::table('roles')->where('id', $id)
		->update([
			'name' => $request->name,
			'created_at' => date('Y-m-d H:i:s'),
			'update_at' => date('Y-m-d H:i:s')
		]);	
		return redirect('role')->with('status', 'Role Berhasil diedit');
	}

	public function delete($id)
	{
		DB::table('roles')->where('id', $id)->delete();
		return redirect('role')->with('status', 'Role Berhasil dihapus');
	}
}
