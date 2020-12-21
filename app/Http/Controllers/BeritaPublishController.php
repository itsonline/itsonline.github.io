<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaPublishController extends Controller
{
    //
    public function beritapublish()
    {
    	// mengambil data dari table inventarisbarang
        $beritapublish = DB::table('detailberita')->get();

    	// mengirim data inventarisbarang ke view index
    	return view('beritapublish',['beritapublish' => $beritapublish]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambahberitapublish()
    {

        // memanggil view tambah
        return view('tambahberitapublish');

    }
    // method untuk insert data ke table pegawai
    public function storeberitapublish(Request $request)
    {
        // insert data ke table pegawai
        DB::table('detailberita')
        ->insert([
            'kodeBerita' => $request->kodeBerita,
            'judulBerita' => $request->judulBerita,
            'tglPublish' => $request->tglPublish,
            'link' => $request->link
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/beritapublish');

    }
    // method untuk edit data pegawai
    public function editberitapublish($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $beritapublish = DB::table('detailberita')
        ->where('kodeBerita',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editberitapublish',['beritapublish' => $beritapublish]);
    }
    // update data pegawai
    public function updateberitapublish(Request $request)
    {
        // update data pegawai
        DB::table('detailberita')
        ->where('kodeBerita',$request->id)->update([
            'kodeBerita' => $request->kodeBerita,
            'judulBerita' => $request->judulBerita,
            'tglPublish' => $request->tglPublish,
            'link' => $request->link
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/beritapublish');
    }
}
