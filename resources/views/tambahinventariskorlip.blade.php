<!DOCTYPE html>
<html>
<head>
    <title>Tambah Inventaris ITS Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <a href="/inventarisbarangkorlip"> Kembali</a>
        <br/>
        <br/>
        <form action="/inventarisbarangkorlip/storekorlip" method="post">
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Pinjam</label>
                <input type="text" required="required" name="kodePinjam" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Staf</label>
                <input type="text" required="required" name="kodeStaf" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                <input type="text" required="required" name="kodeBarang" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Barang</label>
                <input type="text" required="required" name="jenisBarang" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Pinjam</label>
                <input type="date" required="required" name="tglPinjam" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status Peminjaman</label>
                <select type="text" required="required" name="statusPeminjaman" class="form-select form-control">
                    <option>P</option>
                    <option>K</option>
                </select>
            </div> <br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Kembali</label>
                <input type="date" name="tglKembali" class="form-control" >
            </div><br/>
            <input type="submit" value="Simpan Data" class="btn btn-primary" style="margin-bottom: 20px">
        </form>
    </div>
</body>
</html>
