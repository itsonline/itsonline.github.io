<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table pegawai
    	$berita = DB::table('berita')->get();

    	// mengirim data pegawai ke view index
    	return view('index',['berita' => $berita]);

    }
}
