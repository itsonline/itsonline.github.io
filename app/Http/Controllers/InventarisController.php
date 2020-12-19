<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventarisController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table inventarisbarang
    	$inventarisbarang = DB::table('inventarisbarang')->get();

    	// mengirim data inventarisbarang ke view index
    	return view('index',['inventarisbarang' => $inventarisbarang]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambahinventaris()
    {

        // memanggil view tambah
        return view('tambahinventaris');

    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('inventarisbarang')->insert([
            'kodePinjam' => $request->kodePinjam,
            'kodeStaf' => $request->kodeStaf,
            'kodeBarang' => $request->kodeBarang,
            'jenisBarang' => $request->jenisBarang,
            'tglPinjam' => $request->tglPinjam,
            'statusPeminjaman' => $request->statusPeminjaman,
            'tglKembali' => $request->tglKembali
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/inventarisbarang');

    }
    // method untuk edit data pegawai
    public function editinventaris($id)
    {
        // mengambil data inventarisbarang berdasarkan id yang dipilih
        $inventarisbarang = DB::table('inventarisbarang')->where('kodePinjam',$id)->get();
        // passing data inventarisbarang yang didapat ke view edit.blade.php
        return view('edit',['inventarisbarang' => $inventarisbarang]);

    }
}
