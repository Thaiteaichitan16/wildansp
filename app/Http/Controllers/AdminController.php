<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //login
    public function login(){
        return view("Admin.LoginA");
    }
    public function ceklogin(Request $request){
        $s = new petugas();
        $s= $s->where ('username',$request->input('username'))->where('password',$request->input('password'));

        if($s->exists()){
            session([
                'username'=>$request->input('username'),
                'password'=>$request->input('password')
            ]);
            return redirect('/admin');
        }
        return back();
    }  
    //end login
    //logout
    public function logout(){
        session()->flush();
        return redirect('/admin/login');
    }
    //end logout
    // tambah petugas
    public function tambah(){
        return view("Admin.Tambahpetugas");
    }
    public function tambahin(Request $request){
        $c = new petugas();
        $cek = $request->validate([
            'username' => 'required|min:6',
            'password' => 'required|min:4',
            'nama_petugas' => 'required|max:20',
            'level'=> 'required'
        ]);
        $c->create($request->all());
       
    
        return back()->with('Pesan','Data Berhasil Ditambahkan');
    
    }
    //end tambahpetugas
    //dashboard
    public function dash(){
        $cokot = new petugas();
        return view('Admin.Dashboard',['ya'=>$cokot->all()]);
    }
    //end dashboard
    //data tabel petugas
    public function datatabel(){
        $ambil = new petugas();
        return view ('Admin.Datapetugas',['ya'=>$ambil->all()]);
    }
    //end data petugas
    //hapus data
    public function hapus($id){
        $petugas = new petugas();
        $petugas = $petugas->find($id);
        $petugas->delete();
        return back();
    }
    //end hapus data
    //update data
    public function edit($id){
        $petugas = new petugas();
        return view('Admin.Editpetugas',['editpet'=>$petugas->find($id)]);
    }
    public function update(Request $request,$id){
        $validasi = $request->validate([
            'username' => 'required|min:6',
            'password' => 'required|min:4',
            'nama_petugas' => 'required|max:20',
            'level'=> 'required'
        ]);
        
        $petugas = new petugas();
        $petugas = $petugas->find($id)->update($request->all());;
       
        return redirect('/admin/petugas')->with('Pesan','Update Data Berhasil');;
    }
}    