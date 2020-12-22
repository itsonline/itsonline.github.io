<!DOCTYPE html>
<html>
<head>
    <title>Penulisan ITS Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <a href="/penulisanberitakorlip"> Kembali</a>
        <br/>
        <br/>
        @foreach($penulisanberita as $pb)
        <form action="/penulisanberitakorlip/updatepenulisanberitakorlip" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $pb->IDPenulisan }}"> <br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ID Penulisan</label>
                <input type="text"  name="IDPenulisan" value="{{ $pb->IDPenulisan }}" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Staf</label>
                <input type="text" name="kodeStaf" value="{{ $pb->kodeStaf }}" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Berita</label>
                <input type="text" name="kodeBerita" value="{{ $pb->kodeBerita }}" class="form-control">
            </div><br/>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
        @endforeach
    </div>
</body>
</html>
