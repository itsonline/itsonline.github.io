<!DOCTYPE html>
<html>
<head>
    <title>Berita Publish ITS Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <a href="/beritasetiapstafpemred"> Kembali</a>
        <br/>
        <br/>
        @foreach($IDHasilBeritaStaf as $bss)
        <form action="/beritasetiapstafpemred/updateberitasetiapstafpemred" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $bss->kodeBerita }}"> <br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Bulan Tahun</label>
                <input type="text"  name="bulanTahun" value="{{ $bss->bulanTahun }}" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Berita</label>
                <input type="text"  name="kodeBerita" value="{{ $bss->kodeBerita }}" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Staf</label>
                <input type="text"  name="kodeStaf" value="{{ $bss->kodeStaf }}" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga Satuan Berita</label>
                <input type="text"  name="hargaSatuan" value="{{ $bss->hargaSatuan }}" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Volume Artikel</label>
                <input type="number"  name="hargaSatuan" value="{{ $bss->volArtikel }}" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Total Pendapatan</label>
                <input type="number" required="required" name="totalPendapatan" value="{{ $bss->totalPendapatan }}" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Terima Honor</label>
                <input type="date" required="required" name="tglTerimaHonor" value="{{ $bss->tglTerimaHonor }}" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jumlah Kehadiran Rapat</label>
                <input type="number" required="required" name="jmlhKehadiran" value="{{ $bss->jmlhKehadiran }}" class="form-control">
            </div><br/>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
        @endforeach
    </div>
</body>
</html>
