<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventarisController extends Controller
{
    //
    public function inventaris()
    {
    	// mengambil data dari table inventarisbarang
    	$inventarisbarang = DB::table('inventarisbarang')->get();

    	// mengirim data inventarisbarang ke view index
    	return view('inventarisbarang',['inventarisbarang' => $inventarisbarang]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambahinventaris()
    {

        // memanggil view tambah
        return view('tambahinventaris');

    }
    // method untuk insert data ke table pegawai
    public function storeinventaris(Request $request)
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
        // mengambil data pegawai berdasarkan id yang dipilih
        $inventarisbarang = DB::table('inventarisbarang')->where('kodePinjam',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editinventaris',['inventarisbarang' => $inventarisbarang]);
    }
    // update data pegawai
    public function updateinventaris(Request $request)
    {
        // update data pegawai
        DB::table('inventarisbarang')->where('kodePinjam',$request->id)->update([
            'statusPeminjaman' => $request->statusPeminjaman,
            'tglKembali' => $request->tglKembali
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/inventarisbarang');
    }
}
