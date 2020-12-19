<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaSetiapStafController extends Controller
{
    //
    public function beritasetiapstaf()
    {
    	// mengambil data dari table inventarisbarang
        $beritasetiapstaf = DB::table('hasilberitastaf')
        ->join('staf','hasilberitastaf.kodeStaf','staf.kodeStaf')
        ->join('detailberita','hasilberitastaf.kodeBerita','detailberita.kodeBerita')
        ->join('honorberitastaf','hasilberitastaf.kodeStaf','honorberitastaf.kodeStaf')
        ->select('hasilberitastaf.*','staf.tugas','detailberita.judulBerita',
        'detailberita.tglPublish','detailberita.link','honorberitastaf.tglTerimaHonor',
        'honorberitastaf.totalPendapatan','honorberitastaf.jmlhKehadiran')
        ->get();

    	// mengirim data inventarisbarang ke view index
    	return view('beritasetiapstaf',['beritasetiapstaf' => $beritasetiapstaf]);

    }

}
