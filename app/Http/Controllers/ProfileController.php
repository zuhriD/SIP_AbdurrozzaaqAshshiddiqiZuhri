<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Profile;
use App\User;
use App\Imports\ProfilesImport;
use Maatwebsite\Excel\Facades\Excel;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $user = DB::table('profil_user')->where('user_id', $id)->first();
        return view('users.profile', compact('user'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $nm = $request->gambar;
        $namaFile = $nm->getClientOriginalName();
        $dt_upload = new Profile;
        $dt_upload->user_id = session('id');
        $dt_upload->nama_lengkap = $request->name;
        $dt_upload->gender = $request->gender;
        $dt_upload->tgl_lahir = $request->tgl_lahir;
        $dt_upload->alamat = $request->alamat;
        $dt_upload->portofolio = $request->portofolio;
         $dt_upload->pekerjaan = $request->pekerjaan;
        $dt_upload->foto_profil = $namaFile;
        $nm->move(public_path().'/images',$namaFile);
        $dt_upload->save();
    
        return redirect('profil/'.session('id'))->with('status', 'User Berhasil ditambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $dt = Profile::find($id);
        $dt->update($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $dt->foto_profil = $request->file('gambar')->getClientOriginalName();
            $dt->save();
        }
      
    
        return redirect('profil/'.session('id'))->with('status', 'User Berhasil ditambah');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     public function editView()
    {
        return view('users.editProfil');
    }
    public function deleteAllSelected(Request $request)
    {
        $ids = $request->ids;
        User::whereIn('id',$ids)->delete();
        // if ($user->delete()) {
        //     echo "data delete";
        // }else{

        // }
        return response()->json(['success'=>"Student have deleted"]); 
    }
    public function editGambar(Request $request,$id)
    {
        $user= User::where('id',$id)->first();
        $dt = Profile::find($id);
        $dt->update($request->all());
        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $dt->foto_profil = $request->file('gambar')->getClientOriginalName();
            $dt->save();
        }
      
    
        return redirect('user')->with('status', 'Gambar Berhasil diedit');
    }
    public function data()
    {
         $prof = DB::table('profil_user')->where('user_id', session('id'))->first();
        return view('home', compact('prof'));
    }
    public function search(Request $request)
    {
        $search = $request->get('search');
        $post= User::where('name','like','%'.$search.'%')->paginate(5);
        session(['d'=>$post]);
        return view('users.user',['users'=>$post]);
    }
    public function import(Request $request)
    {
        $file = $request->file('import');
        Excel::import(new ProfilesImport, $file);
        return redirect('home')->withStatus('Excel file imported succesfully');
    }
}
