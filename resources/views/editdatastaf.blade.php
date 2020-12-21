<!DOCTYPE html>
<html>
<head>
    <title>Data Staf ITS Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <a href="/datastaf"> Kembali</a>
        <br/>
        <br/>
        @foreach($datastaf as $ds)
        <form action="/datastaf/updatedatastaf" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $ds->kodeStaf }}"> <br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No HP</label>
                <input type="text"  name="noHP" value="{{ $ds->noHP }}" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" name="email" value="{{ $ds->email }}" class="form-control">
            </div> <br/>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
        @endforeach
    </div>
</body>
</html>
