<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\pembayaran;
use App\Models\petugas;
use App\Models\siswa;
use App\Models\spp;
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
        $spp = new spp();
        return view('Admin.Dashboard',['ya'=>$cokot->all(),'yo'=>$spp->all()]);
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
       
    
        return redirect('/admin/petugas')->with('Pesan','Data Berhasil Ditambahkan');
    
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


    //data tabel kelas
    public function datatabel2(){
        $ambil = new kelas();
        return view ('Kelas.Datakelas',['yu'=>$ambil->all()]);
    }
    //end data kelas
    //tambah data kelas
    public function tambahkel(){
        return view("Kelas.Tambahkelas");
    }
    public function tambahkelas(Request $request){
        $c = new kelas();
        $cek = $request->validate([
            'nama_kelas' => 'required',
            'kompetensi_keahlian' => 'required'
        ]);
        $c->create($request->all());
       
    
        return redirect('/admin/kelas')->with('Pesan','Data Berhasil Ditambahkan');
    
    }
    //end tambah kelas
    //update data kelas
    public function editkelas($id){
        $kelas = new kelas();
        return view('Kelas.Editkelas',['editkel'=>$kelas->find($id)]);
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
    public function hapuskelas($id){
        $kelas = new kelas();
        $kelas = $kelas->find($id);
        $kelas->delete();
        return back();
    }
    //end hapus data kelas


    //data tabel siswa
    public function datatabel3(){
        $ambil = new siswa();
        return view ('Siswa.Datasiswa',['yi'=>$ambil->all()]);
    }
    //end data siswa
    //tambah data siswa
    public function tambahsis(){

        $nyuri = new kelas();
        $kaka = new spp();
        return view("Siswa.Tambahsiswa",['datakelas'=>$nyuri->all(),'dataspp'=>$kaka->all()]);
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
       
    
        return redirect('/admin/siswa')->with('Pesan','Data Berhasil Ditambahkan');
    
    }
    //end tambah kelas
    //update data kelas
    public function editsiswa($nisn){
        $siswa = new siswa();
        $nyuri = new kelas();
        $kaka = new spp();
        return view('Siswa.Editsiswa',['editsis'=>$siswa->find($nisn),'datakelas'=>$nyuri->all(),'dataspp'=>$kaka->all()]);
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
    public function hapussiswa($nisn){
        $siswa = new siswa();
        $siswa = $siswa->find($nisn);
        $siswa->delete();
        return back();
    }
    //end hapus data


    //data tabel spp
    public function datatabel4(){
        $ambil = new spp();
        return view ('Spp.Dataspp',['yo'=>$ambil->all()]);
    }
    //end data petugas
    //tambah data siswa
    public function tambahspp(){
        return view("Spp.Tambahspp");
    }
    public function tambahespp(Request $request){
        $c = new spp();
        $cek = $request->validate([
            'tahun' => 'required',
            'nominal' => 'required'
        ]);
        $c->create($request->all());
       
    
        return redirect('/admin/spp')->with('Pesan','Data Berhasil Ditambahkan');
    
    }
    //end tambah kelas
    //update data kelas
    public function editspp($id){
        $spp = new spp();
        return view('Spp.Editspp',['editspp'=>$spp->find($id)]);
    }
    public function updatespp(Request $request,$id){
        $validasi = $request->validate([
            'tahun' => 'required',
            'nominal' => 'required'
        ]);
        
        $spp = new spp();
        $spp = $spp->find($id)->update($request->all());;
       
        return redirect('/admin/spp')->with('Pesan','Update Data Berhasil');;
    }
    //end update data
    //hapus data kelas
    public function hapusspp($id){
        $spp = new spp();
        $spp = $spp->find($id);
        $spp->delete();
        return back();
    }
    //end hapus data

    //data tabel pemabayarn
    public function datatabel5(){
        $ambil = new pembayaran();
        return view ('Admin.History',['ye'=>$ambil->all()]);
    }
    //end data petugas
    //tambah data siswa
    public function bayar(){
        $oke = new siswa();
        $cokot = new petugas();
        $ambil = new spp();
        return view("Admin.Bayarspp",['datapet'=>$cokot->all(),'datasp'=>$ambil->all(),'datasiswa'=>$oke->all()]);
    }
    public function bayarin(Request $request){
        $c = new pembayaran();
        $cek = $request->validate([
            'id_petugas' => 'required',
            'nisn' => 'required',
            'tgl_bayar' => 'required',
            'bulan_bayar' => 'required',
            'tahun_bayar' => 'required',
            'id_spp' => 'required',
            'jumlah_bayar' => 'required'
        ]);
        $c->create($request->all());
       
    
        return redirect('/admin/pembayaran')->with('Pesan','Data Berhasil Ditambahkan');
    
    }
}    