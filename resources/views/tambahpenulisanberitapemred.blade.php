<!DOCTYPE html>
<html>
<head>
    <title>Tambah Penulisan Berita ITS Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <a href="/penulisanberitapemred"> Kembali</a>
        <br/>
        <br/>
        <form action="/penulisanberita/store" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Penulisan</label>
                <input type="text" required="required" name="IDPenulisan" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Staf</label>
                <input type="text" required="required" name="kodeStaf" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Berita</label>
                <input type="text" required="required" name="kodeBerita" class="form-control">
            </div><br/>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
