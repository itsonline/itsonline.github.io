<!DOCTYPE html>
<html>
<head>
    <title>Inventaris Barang ITS Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <a href="/inventarisbarang"> Kembali</a>
        <br/>
        <br/>
        @foreach($inventarisbarang as $ib)
        <form action="/inventarisbarang/updateinventaris" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $ib->kodePinjam }}"> <br/>
            <div class="mb-3">
                <label class="form-label">Status Peminjaman</label>
                <select  name="statusPeminjaman" value="{{ $ib->statusPeminjaman }}" class="form-select form-control">
                    <option>P</option>
                    <option>K</option>
                </select>
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Kembali</label>
                <input type="date" name="tglKembali" value="{{ $ib->tglKembali }}" class="form-control">
            </div><br/>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
        @endforeach
    </div>
</body>
</html>
