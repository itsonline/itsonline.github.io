<html>
<head>
    <title>Berita Setiap Staf ITS Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <br/>
    <div class="container">
	<br/>
	<br/>

	<table class="table table-hover">
        <thead>
		<tr>
			<th>ID Hasil Berita Staf</th>
			<th>Bulan Tahun</th>
			<th>Kode Staf</th>
			<th>Tugas Staf</th>
            <th>Kode Berita</th>
            <th>Judul Berita</th>
            <th>Tanggal Publish</th>
            <th>Link Berita</th>
            <th>Harga Satuan Berita</th>
            <th>Total Pendapatan Bulan Ini</th>
            <th>Tanggal Terima Honor</th>
            <th>Jumlah Kehadiran Rapat</th>
		</tr>
		@foreach($beritasetiapstaf as $bss)
		<tr>
			<td>{{ $bss->IDHasilBeritaStaf }}</td>
            <td>{{ $bss->bulanTahun }}</td>
            <td>{{ $bss->kodeStaf }}</td>
			<td>{{ $bss->tugas }}</td>
            <td>{{ $bss->kodeBerita }}</td>
            <td>{{ $bss->judulBerita }}</td>
            <td>{{ $bss->tglPublish }}</td>
            <td>{{ $bss->link }}</td>
            <td>{{ $bss->hargaSatuan }}</td>
            <td>{{ $bss->totalPendapatan }}</td>
            <td>{{ $bss->tglTerimaHonor }}</td>
            <td>{{ $bss->jmlhKehadiran }}</td>
			</td>
		</tr>
        @endforeach
        </thead>
	</table>


</body>
</html>
