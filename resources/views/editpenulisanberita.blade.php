<!DOCTYPE html>
<html>
<head>
	<title>Penulisan ITS Online</title>
</head>
<body>
	<a href="/penulisanberita"> Kembali</a>
	<br/>
	<br/>
	@foreach($penulisanberita as $pb)
	<form action="/penulisanberita/updatepenulisanberita" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $pb->IDPenulisan }}"> <br/>
        ID Penulisan <input type="text"  name="IDPenulisan" value="{{ $pb->IDPenulisan }}"> <br/>
        Kode Staf <input type="text" name="kodeStaf" value="{{ $pb->kodeStaf }}"> <br/>
        Kode Berita <input type="text" name="kodeBerita" value="{{ $pb->kodeBerita }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</body>
</html>
