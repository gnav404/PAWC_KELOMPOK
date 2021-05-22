<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Buku_controller extends Controller
{
    public function index(){
        $title = 'List Buku';
        $data = \DB::table('m_buku')->get();
 
        return view('buku.buku_index',compact('title','data'));
    }
	
	 public function add(){
        $title = 'Tambah Buku';
        //$kategori = \DB::table('m_kategori')->get();
 
        return view('buku.buku_add',compact('title'));
    }
	
	 public function store(Request $request){
        $judul = $request->judul;
        $keterangan = $request->keterangan;
        $stock = $request->stock;
     
 
        \DB::table('m_buku')->insert([
            
            'judul'=>$judul,
            'keterangan'=>$keterangan,
            'stock'=>$stock,
            
        ]);
 
        return redirect('buku');
    }
}
