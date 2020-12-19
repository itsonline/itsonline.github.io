<html>
<head>
	<title>Inventaris Barang ITS Online</title>
</head>
<body>

	<a href="/inventarisbarang"> Kembali</a>

	<br/>
	<br/>

	@foreach($inventarisbarang as $ib)
	<form action="/inventarisbarang/editinventaris" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $ib->kodePinjam }}"> <br/>
        Kode Pinjam <input type="text" required="required" name="KodePinjam" value="{{ $ib->kodePinjam }}"> <br/>
        Kode Staf <input type="text" required="required" name="KodeStaf" value="{{ $ib->kodeStaf }}"> <br/>
		Kode Barang <input type="text" required="required" name="KodeBarang" value="{{ $ib->kodeBarang }}"> <br/>
		Jenis Barang <input type="text" required="required" name="JenisBarang" value="{{ $ib->jenisBarang }}"> <br/>
        Tanggal Pinjam <input type="date" required="required" name="tglPinjam" value="{{ $ib->tglPinjam }}"> <br/>
        Status Peminjaman <input type="text" required="required" name="statusPeminjaman" value="{{ $ib->statusPeminjaman }}"> <br/>
        Tanggal Kembali <input type="date" required="required" name="tglKembali" value="{{ $ib->tglKembali }}"> <br/>
		<input type="submit" value="Simpan Data Inventaris Barang">
	</form>
	@endforeach


</body>
</html>
