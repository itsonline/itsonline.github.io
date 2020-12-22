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
    public function beritasetiapstafredaktur()
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
    	return view('beritasetiapstafredaktur',['beritasetiapstaf' => $beritasetiapstaf]);

    }
    public function beritasetiapstafkorlip()
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
    	return view('beritasetiapstafkorlip',['beritasetiapstaf' => $beritasetiapstaf]);

    }
    public function beritasetiapstafpemred()
    {
    	// mengambil data dari table inventarisbarang
        $beritasetiapstaf = DB::table('hasilberitastaf')
        ->join('detailberita','hasilberitastaf.kodeBerita','detailberita.kodeBerita')
        ->join('honorberitastaf','hasilberitastaf.kodeStaf','honorberitastaf.kodeStaf')
        ->join('staf','hasilberitastaf.kodeStaf','staf.kodeStaf')
        ->whereRaw('hasilberitastaf.bulanTahun= honorberitastaf.bulanTahun')
        ->whereRaw('hasilberitastaf.kodeStaf=honorberitastaf.kodeStaf')
        ->select('hasilberitastaf.IDHasilBeritaStaf', 'hasilberitastaf.kodeStaf', 'staf.tugas', 'hasilberitastaf.bulanTahun',
        'detailberita.kodeBerita', 'detailberita.judulBerita', 'detailberita.tglPublish', 'detailberita.link',
        'hasilberitastaf.hargaSatuan', 'honorberitastaf.totalPendapatan', 'honorberitastaf.jmlhKehadiran',
        'honorberitastaf.tglTerimaHonor','honorberitastaf.volArtikel')
        ->orderby('hasilberitastaf.IDHasilBeritaStaf')
        ->get();

    	// mengirim data inventarisbarang ke view index
        return view('beritasetiapstafpemred',['beritasetiapstaf' => $beritasetiapstaf]);
    }

    public function tambahberitasetiapstafpemred()
    {

            // memanggil view tambah
        return view('tambahberitasetiapstafpemred');

    }
        // method untuk insert data ke table pegawai
    public function storeberitasetiapstafpemred(Request $request)
    {
        // insert data ke table pegawai
        DB::table('hasilberitastaf')
        ->insert([
            'IDHasilBeritaStaf' => $request->IDHasilBeritaStaf,
            'bulanTahun' => $request->bulanTahun,
            'kodeBerita' => $request->kodeBerita,
            'kodeStaf' => $request->kodeStaf,
            'hargaSatuan' => $request->hargaSatuan,
        ]);
        DB::table('honorberitastaf')
        ->insert([
            'kodeStaf' => $request->kodeStaf,
            'bulanTahun' => $request->bulanTahun,
            'volArtikel' => $request->volArtikel,
            'totalPendapatan' => $request->totalPendapatan,
            'tglTerimaHonor' => $request->tglTerimaHonor,
            'jmlhKehadiran' => $request->jmlhKehadiran,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/beritasetiapstafpemred');
    }

    public function hapusberitasetiapstafpemred($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('hasilberitastaf')
        ->join('detailberita','hasilberitastaf.kodeBerita','detailberita.kodeBerita')
        ->join('honorberitastaf','hasilberitastaf.kodeStaf','honorberitastaf.kodeStaf')
        ->join('staf','hasilberitastaf.kodeStaf','staf.kodeStaf')
        ->whereRaw('hasilberitastaf.bulanTahun= honorberitastaf.bulanTahun')
        ->whereRaw('hasilberitastaf.kodeStaf=honorberitastaf.kodeStaf')
        ->where('IDHasilBeritaStaf',$id)->delete();
        // alihkan halaman ke halaman pegawai
        return redirect('/beritasetiapstafpemred');
    }
    public function editberitasetiapstafpemred($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $beritasetiapstaf = DB::table('hasilberitastaf')
        ->join('detailberita','hasilberitastaf.kodeBerita','detailberita.kodeBerita')
        ->join('honorberitastaf','hasilberitastaf.kodeStaf','honorberitastaf.kodeStaf')
        ->join('staf','hasilberitastaf.kodeStaf','staf.kodeStaf')
        ->whereRaw('hasilberitastaf.bulanTahun= honorberitastaf.bulanTahun')
        ->whereRaw('hasilberitastaf.kodeStaf=honorberitastaf.kodeStaf')
        ->where('IDHasilBeritaStaf',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editberitasetiapstafpemred',['IDHasilBeritaStaf' => $beritasetiapstaf]);
    }

    // update data pegawai
    public function updateberitasetiapstafpemred(Request $request)
    {
        // update data pegawai
        DB::table('hasilberitastaf')
        ->join('detailberita','hasilberitastaf.kodeBerita','detailberita.kodeBerita')
        ->join('honorberitastaf','hasilberitastaf.kodeStaf','honorberitastaf.kodeStaf')
        ->join('staf','hasilberitastaf.kodeStaf','staf.kodeStaf')
        ->whereRaw('hasilberitastaf.bulanTahun = honorberitastaf.bulanTahun')
        ->whereRaw('hasilberitastaf.kodeStaf = honorberitastaf.kodeStaf')
        ->where('IDHasilBeritaStaf',$request->id)->update([
            'honorberitastaf.bulanTahun' => $request->bulanTahun,
            'detailberita.kodeBerita' => $request->kodeBerita,
            'hasilberitastaf.kodeStaf' => $request->kodeStaf,
            'volArtikel' => $request->volArtikel,
            'hargaSatuan' => $request->hargaSatuan,
            'totalPendapatan' => $request->totalPendapatan,
            'tglTerimaHonor' => $request->tglTerimaHonor,
            'jmlhKehadiran' => $request->jmlhKehadiran,
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/beritasetiapstafpemred');
    }
}
