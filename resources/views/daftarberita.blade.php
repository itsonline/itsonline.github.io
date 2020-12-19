<html>
<head>
    <title>Daftar Berita ITS Online</title>
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
			<th>Kode Berita</th>
			<th>Nama Agenda</th>
			<th>Tanggal Agenda</th>
			<th>Waktu Agenda</th>
            <th>Deadline</th>
            <th>Status</th>
            <th>Narasumber</th>
		</tr>
		@foreach($daftarberita as $db)
		<tr>
			<td>{{ $db->kodeBerita }}</td>
            <td>{{ $db->namaAgenda }}</td>
            <td>{{ $db->tglAgenda }}</td>
			<td>{{ $db->waktuAgenda }}</td>
            <td>{{ $db->deadline }}</td>
            <td>{{ $db->status }}</td>
			<td>
				<a href="/daftarberita/editdaftarberita/{{ $db->kodeBerita }}">Edit</a>
			</td>
		</tr>
        @endforeach
        </thead>
	</table>


</body>
</html>
