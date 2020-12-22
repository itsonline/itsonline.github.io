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
    public function beritapublishredaktur()
    {
    	// mengambil data dari table inventarisbarang
        $beritapublish = DB::table('detailberita')->get();

    	// mengirim data inventarisbarang ke view index
    	return view('beritapublishredaktur',['beritapublish' => $beritapublish]);

    }
    public function beritapublishkorlip()
    {
    	// mengambil data dari table inventarisbarang
        $beritapublish = DB::table('detailberita')->get();

    	// mengirim data inventarisbarang ke view index
    	return view('beritapublishkorlip',['beritapublish' => $beritapublish]);

    }
    public function beritapublishpemred()
    {
    	// mengambil data dari table inventarisbarang
        $beritapublish = DB::table('detailberita')->get();

    	// mengirim data inventarisbarang ke view index
    	return view('beritapublishpemred',['beritapublish' => $beritapublish]);

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
    // method untuk menampilkan view form tambah pegawai
    public function tambahberitapublishredaktur()
    {

        // memanggil view tambah
        return view('tambahberitapublishredaktur');

    }
    // method untuk insert data ke table pegawai
    public function storeberitapublishredaktur(Request $request)
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
        return redirect('/beritapublishredaktur');

    }
    public function tambahberitapublishkorlip()
    {

        // memanggil view tambah
        return view('tambahberitapublishkorlip');

    }
    // method untuk insert data ke table pegawai
    public function storeberitapublishkorlip(Request $request)
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
        return redirect('/beritapublishkorlip');

    }
    public function tambahberitapublishpemred()
    {

        // memanggil view tambah
        return view('tambahberitapublishpemred');

    }
    // method untuk insert data ke table pegawai
    public function storeberitapublishpemred(Request $request)
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
        return redirect('/beritapublishpemred');

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
    // method untuk edit data pegawai
    public function editberitapublishredaktur($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $beritapublish = DB::table('detailberita')
        ->where('kodeBerita',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editberitapublishredaktur',['beritapublish' => $beritapublish]);
    }
    // update data pegawai
    public function updateberitapublishredaktur(Request $request)
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
        return redirect('/beritapublishredaktur');
    }
    // method untuk edit data pegawai
    public function editberitapublishkorlip($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $beritapublish = DB::table('detailberita')
        ->where('kodeBerita',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editberitapublishkorlip',['beritapublish' => $beritapublish]);
    }
    // update data pegawai
    public function updateberitapublishkorlip(Request $request)
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
        return redirect('/beritapublishkorlip');
    }
    public function editberitapublishpemred($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $beritapublish = DB::table('detailberita')
        ->where('kodeBerita',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editberitapublishpemred',['beritapublish' => $beritapublish]);
    }
    // update data pegawai
    public function updateberitapublishpemred(Request $request)
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
        return redirect('/beritapublishpemred');
    }
}
