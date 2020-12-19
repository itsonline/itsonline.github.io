<!DOCTYPE html>
<html>
<head>
	<title>Daftar Berita ITS Online</title>
</head>
<body>
	<a href="/daftarberita"> Kembali</a>
	<br/>
	<br/>
	@foreach($daftarberita as $db)
	<form action="/daftarberita/updatedaftarberita" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $db->kodeBerita }}"> <br/>
        Status<input type="text"  name="status" value="{{ $db->status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</body>
</html>
