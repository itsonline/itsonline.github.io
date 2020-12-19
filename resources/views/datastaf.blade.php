<html>
<head>
    <title>Data Staf ITS Online</title>
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
			<th>Kode Staf</th>
			<th>Nama</th>
			<th>NRP</th>
			<th>Departemen</th>
            <th>Jabatan</th>
            <th>Tugas</th>
            <th>Tanggal Lahir</th>
            <th>No HP</th>
            <th>Email</th>
		</tr>
		@foreach($datastaf as $ds)
		<tr>
			<td>{{ $ds->kodeStaf }}</td>
            <td>{{ $ds->namaStaf }}</td>
            <td>{{ $ds->nrpStaf }}</td>
			<td>{{ $ds->depStaf }}</td>
            <td>{{ $ds->jabatan }}</td>
            <td>{{ $ds->tugas }}</td>
            <td>{{ $ds->noHP }}</td>
            <td>{{ $ds->email }}</td>
			<td>
				<a href="/datastaf/editdatastaf/{{ $ds->kodeStaf }}">Edit</a>
			</td>
		</tr>
        @endforeach
        </thead>
	</table>


</body>
</html>
