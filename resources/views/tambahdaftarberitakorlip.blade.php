<!DOCTYPE html>
<html>
<head>
    <title>Tambah Berita ITS Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <a href="/daftarberitakorlip"> Kembali</a>
        <br/>
        <br/>
        <form action="/daftarberitakorlip/storekorlip" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Berita</label>
                <input type="text" required="required" name="kodeBerita" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Agenda</label>
                <input type="text" required="required" name="namaAgenda" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Agenda</label>
                <input type="date" required="required" name="tglAgenda" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Waktu Agenda</label>
                <input type="datetime" required="required" name="waktuAgenda" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Deadline</label>
                <input type="date" required="required" name="deadline" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status</label>
                <select type="text" required="required" name="status" class="form-select form-control">
                    <option>Missed</option>
                    <option>Deleted</option>
                    <option>Assigned</option>
                </select>
            </div> <br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Narasumber</label>
                <input type="text" required="required" name="narasumber" class="form-control">
            </div><br/>
            <input type="submit" value="Simpan Data" class="btn btn-primary" style="margin-bottom: 20px">
        </form>
    </div>
</body>
</html>
