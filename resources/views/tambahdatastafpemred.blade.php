<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Staf ITS Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <a href="/datastafpemred"> Kembali</a>
        <br/>
        <br/>
        <form action="/datastafpemred/storepemred" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Staf</label>
                <input type="text" required="required" name="kodeStaf" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Staf</label>
                <input type="text" required="required" name="namaStaf" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NRP</label>
                <input type="text" required="required" name="nrpStaf" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Departemen</label>
                <input type="text" required="required" name="depStaf" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                <input type="text" required="required" name="jabatan" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tugas</label>
                <input type="text" required="required" name="tugas" class="form-control" >
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                <input type="date" required="required" name="tglLahir" class="form-control" >
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No HP</label>
                <input type="number" required="required" name="noHP" class="form-control" >
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" required="required" name="email" class="form-control" >
            </div><br/>
            <input type="submit" value="Simpan Data" class="btn btn-primary" style="margin-bottom: 20px">
        </form>
    </div>
</body>
</html>
