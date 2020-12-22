<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataStafController extends Controller
{
    //
    public function datastaf()
    {
    	// mengambil data dari table inventarisbarang
        $datastaf = DB::table('staf')
        ->join('handphone','staf.kodeStaf','handphone.kodeStaf')
        ->join('email','staf.kodeStaf','email.kodeStaf')
        ->select('staf.*','email.email','handphone.noHP')
        ->get();

    	// mengirim data inventarisbarang ke view index
    	return view('datastaf',['datastaf' => $datastaf]);

    }
    public function datastafredaktur()
    {
    	// mengambil data dari table inventarisbarang
        $datastaf = DB::table('staf')
        ->join('handphone','staf.kodeStaf','handphone.kodeStaf')
        ->join('email','staf.kodeStaf','email.kodeStaf')
        ->select('staf.*','email.email','handphone.noHP')
        ->get();

    	// mengirim data inventarisbarang ke view index
    	return view('datastafredaktur',['datastaf' => $datastaf]);
    }
    public function datastafkorlip()
    {
    	// mengambil data dari table inventarisbarang
        $datastaf = DB::table('staf')
        ->join('handphone','staf.kodeStaf','handphone.kodeStaf')
        ->join('email','staf.kodeStaf','email.kodeStaf')
        ->select('staf.*','email.email','handphone.noHP')
        ->get();

    	// mengirim data inventarisbarang ke view index
    	return view('datastafkorlip',['datastaf' => $datastaf]);

    }
    public function datastafpemred()
    {
    	// mengambil data dari table inventarisbarang
        $datastaf = DB::table('staf')
        ->join('handphone','staf.kodeStaf','handphone.kodeStaf')
        ->join('email','staf.kodeStaf','email.kodeStaf')
        ->select('staf.*','email.email','handphone.noHP')
        ->get();

    	// mengirim data inventarisbarang ke view index
    	return view('datastafpemred',['datastaf' => $datastaf]);

    }
    public function tambahdatastafpemred()
    {

        // memanggil view tambah
        return view('tambahdatastafpemred');

    }
    // method untuk insert data ke table pegawai
    public function storedatastafpemred(Request $request)
    {
        // insert data ke table pegawai
        DB::table('staf')
        ->insert([
            'kodeStaf' => $request->kodeStaf,
            'namaStaf' => $request->namaStaf,
            'nrpStaf' => $request->nrpStaf,
            'depStaf' => $request->depStaf,
            'jabatan' => $request->jabatan,
            'tugas' => $request->tugas,
            'tglLahir' => $request->tglLahir,
        ]);

        DB::table('handphone')
        ->insert([
            'kodeStaf' => $request->kodeStaf,
            'noHP' => $request->noHP,
        ]);

        DB::table('email')
        ->insert([
            'kodeStaf' => $request->kodeStaf,
            'email' => $request->email,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/datastafpemred');

    }
    // method untuk edit data pegawai
    public function editdatastaf($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $datastaf = DB::table('staf')
        ->join('handphone','staf.kodeStaf','handphone.kodeStaf')
        ->join('email','staf.kodeStaf','email.kodeStaf')
        ->where('staf.kodeStaf',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editdatastaf',['datastaf' => $datastaf]);
    }
    // update data pegawai
    public function updatedatastaf(Request $request)
    {
        // update data pegawai
        DB::table('staf')
        ->join('handphone','staf.kodeStaf','handphone.kodeStaf')
        ->join('email','staf.kodeStaf','email.kodeStaf')
        ->where('staf.kodeStaf',$request->id)->update([
            'noHP' => $request->noHP,
            'email' => $request->email
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/datastaf');
    }
    public function editdatastafredaktur($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $datastaf = DB::table('staf')
        ->join('handphone','staf.kodeStaf','handphone.kodeStaf')
        ->join('email','staf.kodeStaf','email.kodeStaf')
        ->where('staf.kodeStaf',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editdatastafredaktur',['datastaf' => $datastaf]);
    }
    // update data pegawai
    public function updatedatastafredaktur(Request $request)
    {
        // update data pegawai
        DB::table('staf')
        ->join('handphone','staf.kodeStaf','handphone.kodeStaf')
        ->join('email','staf.kodeStaf','email.kodeStaf')
        ->where('staf.kodeStaf',$request->id)->update([
            'noHP' => $request->noHP,
            'email' => $request->email
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/datastafredaktur');
    }
    public function editdatastafkorlip($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $datastaf = DB::table('staf')
        ->join('handphone','staf.kodeStaf','handphone.kodeStaf')
        ->join('email','staf.kodeStaf','email.kodeStaf')
        ->where('staf.kodeStaf',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editdatastafkorlip',['datastaf' => $datastaf]);
    }
    // update data pegawai
    public function updatedatastafkorlip(Request $request)
    {
        // update data pegawai
        DB::table('staf')
        ->join('handphone','staf.kodeStaf','handphone.kodeStaf')
        ->join('email','staf.kodeStaf','email.kodeStaf')
        ->where('staf.kodeStaf',$request->id)->update([
            'noHP' => $request->noHP,
            'email' => $request->email
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/datastafkorlip');
    }
    public function editdatastafpemred($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $datastaf = DB::table('staf')
        ->join('handphone','staf.kodeStaf','handphone.kodeStaf')
        ->join('email','staf.kodeStaf','email.kodeStaf')
        ->where('staf.kodeStaf',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editdatastafpemred',['datastaf' => $datastaf]);
    }
    // update data pegawai
    public function updatedatastafpemred(Request $request)
    {
        // update data pegawai
        DB::table('staf')
        ->join('handphone','staf.kodeStaf','handphone.kodeStaf')
        ->join('email','staf.kodeStaf','email.kodeStaf')
        ->where('staf.kodeStaf',$request->id)->update([
            'noHP' => $request->noHP,
            'email' => $request->email
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/datastafpemred');
    }
}
