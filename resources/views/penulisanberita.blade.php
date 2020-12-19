<html>
<head>
    <title>Penulisan Berita ITS Online</title>
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
			<th>ID Penulisan</th>
			<th>Kode Staf</th>
			<th>Tugas Staf</th>
			<th>Kode Berita</th>
            <th>Nama Agenda</th>
            <th>Tanggal Agenda</th>
            <th>Waktu Agenda</th>
		</tr>
		@foreach($penulisanberita as $pb)
		<tr>
			<td>{{ $pb->IDPenulisan }}</td>
            <td>{{ $pb->kodeStaf }}</td>
            <td>{{ $pb->tugas }}</td>
			<td>{{ $pb->kodeberita }}</td>
            <td>{{ $pb->namaAgenda }}</td>
            <td>{{ $pb->tglAgenda }}</td>
            <td>{{ $pb->waktuAgenda }}</td>
			<td>
				<a href="/penulisanberita/editpenuulisanberita/{{ $pb->IDPenulisan }}">Edit</a>
			</td>
		</tr>
        @endforeach
        </thead>
	</table>


</body>
</html>
