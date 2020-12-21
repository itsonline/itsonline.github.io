<!DOCTYPE html>
<html>
<head>
    <title>Tambah Berita Publish ITS Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <a href="/beritapublish"> Kembali</a>
        <br/>
        <br/>
        <form action="/beritapublish/store" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Berita</label>
                <input type="text" required="required" name="kodeBerita" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul Berita</label>
                <input type="text" required="required" name="judulBerita" class="form-control">
            </div> <br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Publish</label>
                <input type="date" required="required" name="tglPublish" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Berita</label>
                <input type="text" required="required" name="link" class="form-control"> <br/>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    </div>

</body>
</html>
