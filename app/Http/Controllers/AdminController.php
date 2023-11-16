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
        return view("Petugas.TambahPetugas");
    }
    public function tambahin(Request $request){
        $c = new petugas();
        $cek = $request->validate([
            'nama_petugas' => 'required|max:16',
            'username' => 'required|min:6',
            'password' => 'required|min:4',
            'telp' => 'required|max:13',
            'level'=> 'required'
        ]);
        $c->create($request->all());
       
    
        return back()->with('Pesan','Anda berhasil registrasi');
    
    }
    //end tambahpetugas
    //dashboard
    public function dash(){
        $cokot = new petugas();
        return view('Admin.Dashboard',['ya'=>$cokot->all()]);
    }

    public function datatabel(){
        $ambil = new petugas();
        return view ('Admin.Datapetugas',['ya'=>$ambil->all()]);
    }

}    