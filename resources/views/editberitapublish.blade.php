<!DOCTYPE html>
<html>
<head>
	<title>Berita Publish ITS Online</title>
</head>
<body>
	<a href="/beritapublish"> Kembali</a>
	<br/>
	<br/>
	@foreach($beritapublish as $bp)
	<form action="/beritapublish/updateberitapublish" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $bp->kodeBerita }}"> <br/>
        Kode Berita<input type="text"  name="kodeBerita" value="{{ $bp->kodeBerita }}"> <br/>
        Judul Berita<input type="text"  name="judulBerita" value="{{ $bp->judulBerita }}"> <br/>
        Tanggal Publish<input type="text"  name="tglPublish" value="{{ $bp->tglPublish }}"> <br/>
        Link Berita<input type="text"  name="link" value="{{ $bp->link }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</body>
</html>
