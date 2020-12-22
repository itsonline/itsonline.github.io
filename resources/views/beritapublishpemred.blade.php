<html>
<head>
    <title>BeritaPublish ITS Online</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      :root{
        --header-height: 3rem;
        --nav-width: 68px;

        /*===== Colors =====*/
        --first-color:#33383b;
        --first-color-light: #8f9296;
        --white-color: #F7F6FB;

        /*===== Font and typography =====*/
        --body-font: 'Nunito', sans-serif;
        --normal-font-size: 1rem;

        /*===== z index =====*/
        --z-fixed: 100;
      }

      /*===== BASE =====*/
      *,::before,::after{
        box-sizing: border-box;
      }

      body{
        position: relative;
        margin: var(--header-height) 0 0 0;
        padding: 0 1rem;
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        transition: .5s;
      }

      a{
        text-decoration: none;
      }

      /*===== HEADER =====*/
      .header{
        width: 100%;
        height: var(--header-height);
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1rem;
        background-color: var(--white-color);
        z-index: var(--z-fixed);
        transition: .5s;
      }

      .header__toggle{
        color: var(--first-color);
        font-size: 1.5rem;
        cursor: pointer;
      }

      .header__img{
        width: 35px;
        height: 35px;
        display: flex;
        justify-content: center;
        border-radius: 50%;
        overflow: hidden;
      }

      .header__img img{
        width: 40px;
      }

      /*===== NAV =====*/
      .l-navbar{
        position: fixed;
        top: 0;
        left: -30%;
        width: var(--nav-width);
        height: 100vh;
        background-color: var(--first-color);
        padding: .5rem 1rem 0 0;
        transition: .5s;
        z-index: var(--z-fixed);
      }

      .nav{
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow: hidden;
      }

      .nav__logo, .nav__link{
        display: grid;
        grid-template-columns: max-content max-content;
        align-items: center;
        column-gap: 1rem;
        padding: .5rem 0 .5rem 1.5rem;
      }

      .nav__logo{
        margin-bottom: 2rem;
      }

      .nav__logo-icon{
        font-size: 1.25rem;
        color: var(--white-color);
      }

      .nav__logo-name{
        color: var(--white-color);
        font-weight: 700;
      }

      .nav__link{
        position: relative;
        color: var(--first-color-light);
        margin-bottom: 1.5rem;
        transition: .3s;
      }

      .nav__link:hover{
        color: var(--white-color);
      }

      .nav__icon{
        font-size: 1.25rem;
      }

      /*Show navbar movil*/
      .show{
        left: 0;
      }

      /*Add padding body movil*/
      .body-pd{
        padding-left: calc(var(--nav-width) + 1rem);
      }

      /*Active links*/
      .active{
        color: var(--white-color);
      }

      .active::before{
        content: '';
        position: absolute;
        left: 0;
        width: 2px;
        height: 32px;
        background-color: var(--white-color);
      }

      .label {
        float: left;
        width: 150px;
        }
        .infobox {
            width: 120px;
        }
        .error {
            color: red;
            padding-left: 10px;
        }
        .submit {
            align-items:baseline;
            margin-top: 10px;
        }

        .qty .plus-1, .plus-2{
            cursor: pointer;
            display: inline-block;
            color: white;
            width: 30px;
            height: 30px;
            font: 30px/1 Arial,sans-serif;
            text-align: center;
            border-radius: 50%;
            }
        .qty .minus-1, .minus-2 {
            cursor: pointer;
            display: inline-block;
            color: white;
            width: 30px;
            height: 30px;
            font: 30px/1 Arial,sans-serif;
            text-align: center;
            border-radius: 50%;
            background-clip: padding-box;
        }

        .button-move input, a{
            display: inline-block;
        }
        .btn-submit{
            float: right;
        }
      /* ===== MEDIA QUERIES=====*/
      @media screen and (min-width: 768px){
        body{
          margin: calc(var(--header-height) + 1rem) 0 0 0;
          padding-left: calc(var(--nav-width) + 2rem);
        }

        .header{
          height: calc(var(--header-height) + 1rem);
          padding: 0 2rem 0 calc(var(--nav-width) + 2rem);
        }

        .header__img{
          width: 40px;
          height: 40px;
        }

        .header__img img{
          width: 45px;
        }

        .l-navbar{
          left: 0;
          padding: 1rem 1rem 0 0;
        }

        a:hover{
            text-decoration: none;
        }

        /*Show navbar desktop*/
        .show{
          width: calc(var(--nav-width) + 156px);
        }

        /*Add padding body desktop*/
        .body-pd{
          padding-left: calc(var(--nav-width) + 188px);
        }
      }
    </style>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <div class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon'></i>
                    <span class="nav__logo-name"><h5><b><i>ITSOnline</i></b></h5></span>
                </div>

                <div class="nav__list">
                    <a href="/datastafpemred" class="nav__link">
                        <i class='bx bx-user nav__icon' ></i>
                        <span class="nav__name">Data Staf</span>
                    </a>

                    <a href="/daftarberitapemred" class="nav__link">
                        <i class='bx bx-folder nav__icon' ></i>
                        <span class="nav__name">Daftar Berita</span>
                    </a>

                    <a href="/beritapublishpemred" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                        <span class="nav__name">Berita Publish</span>
                    </a>

                    <a href="/beritasetiapstafpemred" class="nav__link">
                        <i class='bx bx-box nav__icon' ></i>
                        <span class="nav__name">Berita Setiap Staf</span>
                    </a>

                    <a href="/penulisanberitapemred" class="nav__link">
                        <i class='bx bx-pen nav__icon' ></i>
                        <span class="nav__name">Penulisan Berita</span>
                    </a>

                    <a href="inventarisbarangpemred" class="nav__link">
                        <i class='bx bx-camera nav__icon' ></i>
                        <span class="nav__name">Inventaris Barang</span>
                    </a>
                </div>
            </div>

            <a href="#" class="nav__link">
                <i class='bx bx-log-out nav__icon' ></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
    <br/>
    <div class="container">
        <a href="beritapublishpemred/tambahberitapublishpemred/" style="font-size:20px"> + Tambah Berita Publish Baru</a>
	<br/>
	<br/>

	<table class="table table-hover">
        <thead>
		<tr>
			<th>Kode Berita</th>
			<th>Judul Berita</th>
			<th>Tanggal Publish</th>
			<th>Link Berita</th>
		</tr>
		@foreach($beritapublish as $bp)
		<tr>
			<td>{{ $bp->kodeBerita }}</td>
            <td>{{ $bp->judulBerita }}</td>
            <td>{{ $bp->tglPublish }}</td>
			<td>{{ $bp->link }}</td>
			<td>
                <a href="beritapublishpemred/editberitapublishpemred/{{ $bp->kodeBerita }}">Edit</a>
			</td>
		</tr>
        @endforeach
        </thead>
	</table>

    <script>
        const showNavbar = (toggleId, navId, bodyId, headerId) =>{
            const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

            // Validate that all variables exist
            if(toggle && nav && bodypd && headerpd){
                toggle.addEventListener('click', ()=>{
                    // show navbar
                    nav.classList.toggle('show')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')
                })
            }
        }

        showNavbar('header-toggle','nav-bar','body-pd','header')

        /*===== LINK ACTIVE  =====*/
        const linkColor = document.querySelectorAll('.nav__link')

        function colorLink(){
            if(linkColor){
                linkColor.forEach(l=> l.classList.remove('active'))
                this.classList.add('active')
            }
        }
        linkColor.forEach(l=> l.addEventListener('click', colorLink))
    </script>
</body>
</html>
