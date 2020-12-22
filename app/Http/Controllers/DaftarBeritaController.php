<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DaftarBeritaController extends Controller
{
    //
    public function daftarberita()
    {
    	// mengambil data dari table inventarisbarang
        $daftarberita = DB::table('berita')
        ->join('narasumber','berita.kodeBerita','narasumber.kodeBerita')
        ->select('berita.*','narasumber.narsum')
        ->get();

    	// mengirim data inventarisbarang ke view index
    	return view('daftarberita',['daftarberita' => $daftarberita]);

    }
    public function daftarberitaredaktur()
    {
    	// mengambil data dari table inventarisbarang
        $daftarberita = DB::table('berita')
        ->join('narasumber','berita.kodeBerita','narasumber.kodeBerita')
        ->select('berita.*','narasumber.narsum')
        ->get();

    	// mengirim data inventarisbarang ke view index
    	return view('daftarberitaredaktur',['daftarberita' => $daftarberita]);
    }

    public function daftarberitakorlip()
    {
    	// mengambil data dari table inventarisbarang
        $daftarberita = DB::table('berita')
        ->join('narasumber','berita.kodeBerita','narasumber.kodeBerita')
        ->select('berita.*','narasumber.narsum')
        ->get();

    	// mengirim data inventarisbarang ke view index
    	return view('daftarberitakorlip',['daftarberita' => $daftarberita]);

    }
    public function daftarberitapemred()
    {
    	// mengambil data dari table inventarisbarang
        $daftarberita = DB::table('berita')
        ->join('narasumber','berita.kodeBerita','narasumber.kodeBerita')
        ->select('berita.*','narasumber.narsum')
        ->get();

    	// mengirim data inventarisbarang ke view index
    	return view('daftarberitapemred',['daftarberita' => $daftarberita]);

    }
    public function tambahdaftarberitakorlip()
    {
        // alihkan halaman ke halaman pegawai
        return view('/tambahdaftarberitakorlip');

    }
    public function storedaftarberitakorlip(Request $request)
    {
        DB::table('berita')
        ->insert([
            'kodeBerita' => $request->kodeBerita,
            'namaAgenda' => $request->namaAgenda,
            'tglAgenda' => $request->tglAgenda,
            'waktuAgenda' => $request->waktuAgenda,
            'deadline' => $request->deadline,
            'status' => $request->status,
            'narasumber' => $request->narasumber,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/daftarberitakorlip');

    }

    // method untuk edit data pegawai
    public function editdaftarberita($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $daftarberita = DB::table('berita')
        ->join('narasumber','berita.kodeBerita','narasumber.kodeBerita')
        ->where('berita.kodeBerita',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editdaftarberita',['daftarberita' => $daftarberita]);
    }
    // update data pegawai
    public function updatedaftarberita(Request $request)
    {
        // update data pegawai
        DB::table('berita')
        ->join('narasumber','berita.kodeBerita','narasumber.kodeBerita')
        ->where('berita.kodeBerita',$request->id)->update([
            'status' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/daftarberita');
    }

    public function editdaftarberitaredaktur($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $daftarberita = DB::table('berita')
        ->join('narasumber','berita.kodeBerita','narasumber.kodeBerita')
        ->where('berita.kodeBerita',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editdaftarberitaredaktur',['daftarberita' => $daftarberita]);
    }
    // update data pegawai
    public function updatedaftarberitaredaktur(Request $request)
    {
        // update data pegawai
        DB::table('berita')
        ->join('narasumber','berita.kodeBerita','narasumber.kodeBerita')
        ->where('berita.kodeBerita',$request->id)->update([
            'status' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/daftarberitaredaktur');
    }
    // method untuk edit data pegawai
    public function editdaftarberitakorlip($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $daftarberita = DB::table('berita')
        ->join('narasumber','berita.kodeBerita','narasumber.kodeBerita')
        ->where('berita.kodeBerita',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editdaftarberitakorlip',['daftarberita' => $daftarberita]);
    }
    // update data pegawai
    public function updatedaftarberitakorlip(Request $request)
    {
        // update data pegawai
        DB::table('berita')
        ->join('narasumber','berita.kodeBerita','narasumber.kodeBerita')
        ->where('berita.kodeBerita',$request->id)->update([
            'status' => $request->status
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/daftarberitakorlip');
    }
}
