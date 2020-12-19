<html>
<head>
    <title>Berita ITS Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <br/>
    <div class="container">
        <a href="/berita/tambah" style="font-size:20px"> + Tambah Pegawai Baru</a>
	<br/>
	<br/>

	<table class="table table-hover">
        <thead>
		<tr>
			<th>Kode Berita</th>
			<th>Nama Agenda</th>
			<th>Tanggal Agenda</th>
			<th>Waktu Agenda</th>
            <th>Deadline</th>
            <th>Status</th>
		</tr>
		@foreach($berita as $b)
		<tr>
			<td>{{ $b->kodeBerita }}</td>
			<td>{{ $b->namaAgenda }}</td>
			<td>{{ $b->tglAgenda }}</td>
            <td>{{ $b->waktuAgenda }}</td>
            <td>{{ $b->deadline }}</td>
            <td>{{ $b->status }}</td>
			<td>
				<a href="/berita/edit/{{ $b->kodeBerita }}">Edit</a>
				|
				<a href="/berita/hapus/{{ $b->kodeBerita }}">Hapus</a>
			</td>
		</tr>
        @endforeach
        </thead>
	</table>


</body>
</html>
