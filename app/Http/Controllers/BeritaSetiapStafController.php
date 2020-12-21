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
        ->join('detailberita','hasilberitastaf.kodeBerita','detailberita.kodeBerita')
        ->join('honorberitastaf','hasilberitastaf.kodeStaf','honorberitastaf.kodeStaf')
        ->join('staf','hasilberitastaf.kodeStaf','staf.kodeStaf')
        ->whereRaw('hasilberitastaf.bulanTahun= honorberitastaf.bulanTahun')
        ->whereRaw('hasilberitastaf.kodeStaf=honorberitastaf.kodeStaf')
        //->where('detailBerita.kodeBerita','=','hasilberitastaf.kodeBerita')
        //->where(['hasilberitastaf.bulanTahun','=','honorberitastaf.bulanTahun'],
        //['hasilberitastaf.kodeStaf','=','honorberitastaf.kodeStaf'])
        ->select('hasilberitastaf.IDHasilBeritaStaf', 'hasilberitastaf.kodeStaf', 'staf.tugas', 'hasilberitastaf.bulanTahun',
        'detailberita.kodeBerita', 'detailberita.judulBerita', 'detailberita.tglPublish', 'detailberita.link',
        'hasilberitastaf.hargaSatuan', 'honorberitastaf.totalPendapatan', 'honorberitastaf.jmlhKehadiran',
        'honorberitastaf.tglTerimaHonor')
        //->where('hasilberitastaf.kodeStaf','=','honorberitastaf.kodeStaf')
        ->orderby('hasilberitastaf.IDHasilBeritaStaf')
        ->get();

    	// mengirim data inventarisbarang ke view index
    	return view('beritasetiapstaf',['beritasetiapstaf' => $beritasetiapstaf]);

    }

}
