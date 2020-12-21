<!DOCTYPE html>
<html>
<head>
    <title>Daftar Berita ITS Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <a href="/daftarberita"> Kembali</a>
        <br/>
        <br/>
        @foreach($daftarberita as $db)
        <form action="/daftarberita/updatedaftarberita" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $db->kodeBerita }}"> <br/>
            <div class="mb-3">
                <label class="form-label">Status Berita</label>
                <select name="status" value="{{ $db->status }}" class="form-select form-control">
                    <option>Published</option>
                    <option>Assigned</option>
                    <option>Missed</option>
                    <option>Deleted</option>
                </select>
            </div><br/>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
        @endforeach
    </div>
</body>
</html>
