<!DOCTYPE html>
<html>
<head>
    <title>Berita Publish ITS Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px">
        <a href="/beritapublishkorlip"> Kembali</a>
        <br/>
        <br/>
        @foreach($beritapublish as $bp)
        <form action="/beritapublishkorlip/updateberitapublishkorlip" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $bp->kodeBerita }}"> <br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kode Berita</label>
                <input type="text"  name="kodeBerita" value="{{ $bp->kodeBerita }}" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul Berita</label>
                <input type="text"  name="judulBerita" value="{{ $bp->judulBerita }}" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul Berita</label>
                <input type="text"  name="tglPublish" value="{{ $bp->tglPublish }}" class="form-control">
            </div><br/>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Berita</label>
                <input type="text"  name="link" value="{{ $bp->link }}" class="form-control">
            </div><br/>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
        @endforeach
    </div>
</body>
</html>
