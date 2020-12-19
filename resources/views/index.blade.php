<html>
<head>
    <title>Inventaris Barang ITS Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <br/>
    <div class="container">
        <a href="/inventarisbarang/tambahinventaris" style="font-size:20px"> + Tambah Pegawai Baru</a>
	<br/>
	<br/>

	<table class="table table-hover">
        <thead>
		<tr>
			<th>Kode Pinjam</th>
			<th>Kode Staf</th>
			<th>Kode Barang</th>
			<th>Jenis Barang</th>
            <th>Tanggal Pinjam</th>
            <th>Status Peminjaman</th>
            <th>Tanggal Kembali</th>
		</tr>
		@foreach($inventarisbarang as $ib)
		<tr>
			<td>{{ $ib->kodePinjam }}</td>
            <td>{{ $ib->kodeStaf }}</td>
            <td>{{ $ib->kodeBarang }}</td>
			<td>{{ $ib->jenisBarang }}</td>
            <td>{{ $ib->tglPinjam }}</td>
            <td>{{ $ib->statusPeminjaman }}</td>
            <td>{{ $ib->tglKembali }}</td>
			<td>
				<a href="/inventarisbarang/editinventaris/{{ $ib->kodePinjam }}">Edit</a>
			</td>
		</tr>
        @endforeach
        </thead>
	</table>


</body>
</html>
