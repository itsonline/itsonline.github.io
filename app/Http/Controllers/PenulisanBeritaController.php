<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenulisanBeritaController extends Controller
{
    //
    public function penulisanberita()
    {
    	// mengambil data dari table inventarisbarang
        $penulisanberita = DB::table('penulisan')
        ->join('berita','penulisan.kodeBerita','berita.kodeBerita')
        ->join('staf','penulisan.kodeStaf','staf.kodeStaf')
        ->select('penulisan.*','berita.namaAgenda','staf.tugas','berita.tglAgenda', 'berita.waktuAgenda',)
        ->orderBy('IDPenulisan')
        ->get();


    	// mengirim data inventarisbarang ke view index
    	return view('penulisanberita',['penulisanberita' => $penulisanberita]);

    }

    // method untuk menampilkan view form tambah pegawai
    public function tambahpenulisanberita()
    {

        // memanggil view tambah
        return view('tambahpenulisanberita');

    }
    // method untuk insert data ke table pegawai
    public function storepenulisanberita(Request $request)
    {
        // insert data ke table pegawai
        DB::table('penulisan')
        ->join('berita','penulisan.kodeBerita','berita.kodeBerita')
        ->join('staf','penulisan.kodeStaf','staf.kodeStaf')
        ->insert([
            'IDPenulisan' => $request->IDPenulisan,
            'kodeStaf' => $request->kodeStaf,
            'kodeBerita' => $request->kodeBerita,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/penulisanberita');

    }
    // method untuk edit data pegawai
    public function editpenulisanberita($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $penulisanberita = DB::table('penulisan')
        ->where('IDPenulisan',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editpenulisanberita',['penulisanberita' => $penulisanberita]);
    }
    // update data pegawai
    public function updatepenulisanberita(Request $request)
    {
        // update data pegawai
        DB::table('penulisan')
        ->where('IDPenulisan',$request->id)->update([
            'IDPenulisan' => $request->IDPenulisan,
            'kodeStaf' => $request->kodeStaf,
            'kodeBerita' => $request->kodeBerita,
        ]);
        DB::table('hasilberitastaf')
        ->where('IDHasilBeritaStaf',$request->id)->update([
            'KodeStaf' => $request->kodeStaf,
            'KodeBerita' => $request->kodeBerita,

        ]);
        DB::table('honorberitastaf')
        ->where('kodeStaf',$request->id)->update([
            'KodeStaf' => $request->kodeStaf,

        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/penulisanberita');
    }
    // method untuk hapus data pegawai
    public function hapuspenulisanberita($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('penulisan')
        ->join('berita','penulisan.kodeBerita','berita.kodeBerita')
        ->join('staf','penulisan.kodeStaf','staf.kodeStaf')
        ->where('IDPenulisan',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/penulisanberita');
    }
}
