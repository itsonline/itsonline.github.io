<!DOCTYPE html>
<html>
<head>
	<title>Inventaris Barang ITS Online</title>
</head>
<body>
	<a href="/inventarisbarang"> Kembali</a>
	<br/>
	<br/>
	@foreach($inventarisbarang as $ib)
	<form action="/inventarisbarang/updateinventaris" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $ib->kodePinjam }}"> <br/>
        Status Peminjaman <input type="text"  name="statusPeminjaman" value="{{ $ib->statusPeminjaman }}"> <br/>
        Tanggal Kembali <input type="date" name="tglKembali" value="{{ $ib->tglKembali }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</body>
</html>
