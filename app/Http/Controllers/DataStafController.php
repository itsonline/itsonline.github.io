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
}
