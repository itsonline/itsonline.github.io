<!DOCTYPE html>
<html>
<head>
	<title>Data Staf ITS Online</title>
</head>
<body>
	<a href="/datastaf"> Kembali</a>
	<br/>
	<br/>
	@foreach($datastaf as $ds)
	<form action="/datastaf/updatedatastaf" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $ds->kodeStaf }}"> <br/>
        No HP <input type="text"  name="noHP" value="{{ $ds->noHP }}"> <br/>
        Email <input type="text" name="email" value="{{ $ds->email }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</body>
</html>
