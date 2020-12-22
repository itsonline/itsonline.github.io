<!DOCTYPE html>
<html>
<head>
    <title>Tambah Berita ITS Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <a href="/beritasetiapstafpemred"> Kembali</a>
        <br/>
        <br/>
        <form action="/beritasetiapstafpemred/storepemred" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Hasil Berita Staf</label>
                <input type="text" required="required" name="IDHasilBeritaStaf" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Bulan Tahun</label>
                <input type="text" required="required" name="bulanTahun" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Berita</label>
                <input type="text" required="required" name="kodeBerita" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Staf</label>
                <input type="text" required="required" name="kodeStaf" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga Satuan Berita</label>
                <input type="number" required="required" name="hargaSatuan" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Volume Artikel</label>
                <input type="number" required="required" name="volArtikel" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Total Pendapatan</label>
                <input type="number" required="required" name="totalPendapatan" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Terima Honor</label>
                <input type="date" required="required" name="tglTerimaHonor" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jumlah Kehadiran Rapat</label>
                <input type="number" required="required" name="jmlhKehadiran" class="form-control">
            </div><br/>
            <input type="submit" value="Simpan Data" class="btn btn-primary" style="margin-bottom: 20px">
        </form>
    </div>
</body>
</html>
