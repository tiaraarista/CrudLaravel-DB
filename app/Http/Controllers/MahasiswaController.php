<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(Request $request){
        $kelas = $request->kelas;
        if(empty($kelas)){
           $mahasiswa =  Mahasiswa::orderBy('kelas', 'ASC')->orderBy('nim','ASC')->get();
        }else{
           $mahasiswa =  Mahasiswa::where('kelas', $kelas)->orderBy('nim','ASC')->get();
        }
  
        return view('mahasiswa', compact('mahasiswa'));
     }
  
     public function kelasA(){
        $mahasiswa =  Mahasiswa::where('kelas', '6A')->orderBy('nim','ASC')->get();
  
        return view('mahasiswa', compact('mahasiswa'));
     }
  
     public function kelasB(){
        $mahasiswa =  Mahasiswa::where('kelas', '6B')->orderBy('nim','ASC')->get();
  
        return view('mahasiswa', compact('mahasiswa'));
     }
  
     public function kelasC(){
        $mahasiswa =  Mahasiswa::where('kelas', '6C')->orderBy('nim','ASC')->get();
  
        return view('mahasiswa', compact('mahasiswa'));
     }
  
     public function kelasD(){
        $mahasiswa =  Mahasiswa::where('kelas', '6D')->orderBy('nim','ASC')->get();
  
        return view('mahasiswa', compact('mahasiswa'));
     }

      // method untuk menampilkan view form tambah data mahasiswa
      public function tambah()
      {
   
         // memanggil view tambah
         return view('tambah');
   
      }
   
      // method untuk insert data ke table mahasiswa
      public function store(Request $request)
      {
         // insert data ke table mahasiswa
         DB::table('mahasiswa')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
         ]);
         // alihkan halaman ke halaman mahasiswa
         return redirect('/mahasiswa');
   
      }
   
      // method untuk edit data mahasiswa
      public function edit($nim)
      {
         // mengambil data mahasiswa berdasarkan nim yang dipilih
         $mahasiswa = Mahasiswa::where('nim',$nim)->get();
         // passing data mahasiswa yang didapat ke view edit.blade.php
         return view('edit',['mahasiswa' => $mahasiswa]);
   
      }
   
      // update data mahasiswa
      public function update(Request $request)
      {
         // update data mahasiswa
         Mahasiswa::where('nim',$request->nim)->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas
         ]);
         // alihkan halaman ke halaman mahasiswa
         return redirect('/mahasiswa');
      }
   
      // method untuk hapus data mahasiswa
      public function hapus($nim)
      {
         // menghapus data mahasiswa berdasarkan nim yang dipilih
         Mahasiswa::where('nim',$nim)->delete();
         
         // alihkan halaman ke halaman mahasiswa
         return redirect('/mahasiswa');
      }
}