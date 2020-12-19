<!DOCTYPE html>
<html>
<head>
	<title>Tambah Berita Publish ITS Online</title>
</head>
<body>
	<a href="/beritapublish"> Kembali</a>
	<br/>
	<br/>
	<form action="/beritapublish/store" method="post">
		{{ csrf_field() }}
		Kode Berita <input type="text" required="required" name="kodeBerita"> <br/>
        Judul Berita <input type="text" required="required" name="judulBerita" > <br/>
		Tanggal Publish <input type="date" required="required" name="tglPublish"> <br/>
		Link Berita <input type="text" required="required" name="link"> <br/>

		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
