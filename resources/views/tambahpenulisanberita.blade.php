<!DOCTYPE html>
<html>
<head>
	<title>Tambah Penulisan Berita ITS Online</title>
</head>
<body>
	<a href="/penulisanberita"> Kembali</a>
	<br/>
	<br/>
	<form action="/penulisanberita/store" method="post">
		{{ csrf_field() }}
		ID Penulisan <input type="text" required="required" name="IDPenulisan"> <br/>
        Kode Staf <input type="text" required="required" name="kodeStaf" > <br/>
		Kode Berita <input type="text" required="required" name="kodeBerita"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
