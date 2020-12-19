<!DOCTYPE html>
<html>
<head>
	<title>Tambah Inventaris ITS Online</title>
</head>
<body>


	<a href="/inventarisbarang"> Kembali</a>

	<br/>
	<br/>

	<form action="/inventarisbarang/store" method="post">
		{{ csrf_field() }}
		Kode Pinjam <input type="text" required="required" name="kodePinjam"> <br/>
        Kode Staf <input type="text" required="required" name="kodeStaf" > <br/>
		Kode Barang <input type="text" required="required" name="kodeBarang"> <br/>
		Jenis Barang <input type="text" required="required" name="jenisBarang"> <br/>
        Tanggal Pinjam <input type="date" required="required" name="tglPinjam"> <br/>
        Status Peminjaman <input type="text" required="required" name="statusPeminjaman"> <br/>
        Tanggal Kembali <input type="date" required="required" name="tglKembali"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
