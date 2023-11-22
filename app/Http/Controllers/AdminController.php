<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\petugas;
use App\Models\siswa;
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
    //update data petugas
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
    //end update data
    //hapus data petugas
    public function hapus($id){
        $petugas = new petugas();
        $petugas = $petugas->find($id);
        $petugas->delete();
        return back();
    }
    //end hapus data


    //tambah data kelas
    public function tambahkel(){
        return view("Admin.Tambahkelas");
    }
    public function tambahkelas(Request $request){
        $c = new kelas();
        $cek = $request->validate([
            'nama_kelas' => 'required',
            'kompetensi_keahlian' => 'required'
        ]);
        $c->create($request->all());
       
    
        return back()->with('Pesan','Data Berhasil Ditambahkan');
    
    }
    //end tambah kelas
    //update data kelas
    public function editkel($id){
        $kelas = new kelas();
        return view('Admin.Editkelas',['editkel'=>$kelas->find($id)]);
    }
    public function updatekelas(Request $request,$id){
        $validasi = $request->validate([
            'nama_kelas' => 'required',
            'kompetensi_keahlian' => 'required'
        ]);
        
        $kelas = new kelas();
        $kelas = $kelas->find($id)->update($request->all());;
       
        return redirect('/admin/kelas')->with('Pesan','Update Data Berhasil');;
    }
    //end update data
    //hapus data kelas
    public function hapuskel($id){
        $kelas = new kelas();
        $kelas = $kelas->find($id);
        $kelas->delete();
        return back();
    }
    //end hapus data


    //tambah data siswa
    public function tambahsis(){
        return view("Admin.Tambahsiswa");
    }
    public function tambahsiswa(Request $request){
        $c = new siswa();
        $cek = $request->validate([
            'nisn' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'id_kelas' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'id_spp' => 'required'
        ]);
        $c->create($request->all());
       
    
        return back()->with('Pesan','Data Berhasil Ditambahkan');
    
    }
    //end tambah kelas
    //update data kelas
    public function editsis($nisn){
        $siswa = new siswa();
        return view('Admin.Editsiswa',['editsis'=>$siswa->find($nisn)]);
    }
    public function updatesiswa(Request $request,$nisn){
        $validasi = $request->validate([
            'nisn' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'id_kelas' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'id_spp' => 'required'
        ]);
        
        $siswa = new siswa();
        $siswa = $siswa->find($nisn)->update($request->all());;
       
        return redirect('/admin/siswa')->with('Pesan','Update Data Berhasil');;
    }
    //end update data
    //hapus data kelas
    public function hapussis($nisn){
        $siswa = new siswa();
        $siswa = $siswa->find($nisn);
        $siswa->delete();
        return back();
    }
    //end hapus data


}    