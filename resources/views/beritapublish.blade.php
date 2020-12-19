<html>
<head>
    <title>BeritaPublish ITS Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <br/>
    <div class="container">
        <a href="/beritapublish/tambahberitapublish" style="font-size:20px"> + Tambah Berita Publish Baru</a>
	<br/>
	<br/>

	<table class="table table-hover">
        <thead>
		<tr>
			<th>Kode Berita</th>
			<th>Judul Berita</th>
			<th>Tanggal Publish</th>
			<th>Link Berita</th>
		</tr>
		@foreach($beritapublish as $bp)
		<tr>
			<td>{{ $bp->kodeBerita }}</td>
            <td>{{ $bp->judulBerita }}</td>
            <td>{{ $bp->tglPublish }}</td>
			<td>{{ $bp->link }}</td>
			<td>
                <a href="/beritapublish/editberitapublish/{{ $bp->kodeBerita }}">Edit</a>
                |
                <a href="/beritapublish/hapus/{{ $bp->kodeBerita }}">Hapus</a>
			</td>
		</tr>
        @endforeach
        </thead>
	</table>


</body>
</html>
