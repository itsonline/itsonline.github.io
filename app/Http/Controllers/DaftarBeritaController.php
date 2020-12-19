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
}
