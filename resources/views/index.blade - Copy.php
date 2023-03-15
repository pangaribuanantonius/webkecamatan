<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="asset/fontawesome-free-6.3.0-web/css/all.min.css">

    <title>Membuat template website</title>
  </head>
  <body>
    <section>
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html"><h1>Navbar</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profil
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Sejarah</a></li>
                <li><a class="dropdown-item" href="#">Letak Geografis</a></li>
                <li><a class="dropdown-item" href="#">Batas Wilayah</a></li>
                <li><a class="dropdown-item" href="#">Visi dan Misi</a></li>
                <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                <li><a class="dropdown-item" href="#">Potensi Kecamatan</a></li>
              </ul> 
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pemerintahan</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Layanan Terkait
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Portal Deli Serdang</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex">
            <!-- <button class="btn btn-sm btn-outline-secondary"><a class="nav-link text-dark" href="#" tabindex="-1"><strong>Login</strong></a></button> -->
            <a class="nav-link text-dark" href="#">
                <strong>Login</strong>
            </a>
          </form>
        </div>
      </div>
    </nav>
    </section>

    <section class="mb-5">
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://images.unsplash.com/photo-1677196728306-eeafea692454?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=420&q=80" class="d-block w-100" alt="..." style="height: 500px; object-fit:cover;">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="DSC01329.JPG" class="d-block w-100" alt="..." style="height: 500px; object-fit:cover;">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="DSC01315.JPG" class="d-block w-100" alt="..." style="height: 500px; object-fit:cover;">
            <div class="carousel-caption d-none d-md-block text-white">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section class="mb-5">
      <div class="container">
        <h1><center>Galeri 1</center></h1>
        <div class="row">
          @foreach($berita as $news)
          <div class="col-4">
            <div class="card">
              <img src="https://images.unsplash.com/photo-1677352241429-dc90cfc7a623?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=420&q=80" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">{{$news->judul_berita}}</p>
              </div>
            </div><br>
          </div>
          @endforeach
        </div>
        <a class="nav-link text-center text-dark" href="#">Selengkapnya</a>
      </div>
    </section>

     <section class="mb-5">
      <div class="container">
        <h1><center>Galeri 2</center></h1>
        <div class="row">
          @foreach($foto as $fot)
          <div class="col-4">
            <div class="card">
              <img src="https://images.unsplash.com/photo-1677352241429-dc90cfc7a623?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=420&q=80" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">{{$fot->keterangan}}</p>
              </div>
            </div><br>
          </div>
          @endforeach
        </div>
        <a class="nav-link text-center text-dark" href="#">Selengkapnya</a>
      </div>
    </section>

    <section class="mb-5">
      <div class="container"> 
        <div class="row">
          <div class="col-3" align="center">
           <h1><i class="fa-sharp fa-solid fa-gear fa-2xl" style=""></i></h1>
           <p>
             <h3>menu 1</h3>
           </p>
         </div>
         <div class="col-3" align="center">
           <h1><i class="fa-sharp fa-solid fa-gear fa-2xl" style=""></i></h1>
           <p>
             <h3>menu 2</h3>
           </p>
         </div>
         <div class="col-3" align="center">
           <h1><i class="fa-sharp fa-solid fa-gear fa-2xl" style=""></i></h1>
           <p>
             <h3>menu 3</h3>
           </p>
         </div>
         <div class="col-3" align="center">
           <h1><i class="fa-sharp fa-solid fa-gear fa-2xl" style=""></i></h1>
           <p>
             <h3>menu 4</h3>
           </p>
         </div>
       </div>
     </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container">
        <div class="row text-white">
           <div class="col-3">
             <p>
               <h2>
                <strong>Kecamatan<br>Lubuk Pakam</strong>
              </h2>
              <br>
              Jln Pematang Siantar Dusun VI
              <br>
              Kecamatan Lubuk Pakam
              <br><br>
              <strong>Telepon:</strong>
              <br>
              Telp082167876287
              <br>
              <strong>Email:</strong>
              <br>
              pangaribuanantonius@gmail.com
            </p>
          </div>
          <div class="col-2">
           <p>
             <h4>Profil</h4>
             <br>
             <i class="fa-solid fa-angle-right">&nbsp;&nbsp;</i>Sejarah
             <br><br>
             <i class="fa-solid fa-angle-right">&nbsp;&nbsp;</i>Letak Geografis
             <br><br>
             <i class="fa-solid fa-angle-right">&nbsp;&nbsp;</i>Batas Wilayah
             <br><br>
             <i class="fa-solid fa-angle-right">&nbsp;&nbsp;</i>Struktur Organisasi
             <br><br>
             <i class="fa-solid fa-angle-right">&nbsp;&nbsp;</i>Potensi
           </p>
          </div>
          <div class="col-2">
            <p>
             <h4>Tautan</h4>
             <br>
             <i class="fa-solid fa-angle-right">&nbsp;&nbsp;</i>Tautan 1
             <br><br>
             <i class="fa-solid fa-angle-right">&nbsp;&nbsp;</i>Tautan 2
             <br><br>
             <i class="fa-solid fa-angle-right">&nbsp;&nbsp;</i>Tautan 3
             <br><br>
             <i class="fa-solid fa-angle-right">&nbsp;&nbsp;</i>Tautan 4
           </p>
          </div>
          <div class="col-5" align="center">
            <br>
            <p>
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1194531755973!2d98.86853691414554!3d3.5599536514840713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031496a5019990f%3A0xf6fd7a86540fde97!2sKANTOR%20DINAS%20KOMINFO%20(Komunikasi%20Dan%20Informatika)!5e0!3m2!1sid!2sid!4v1678071831150!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </p>
          </div>
        </div>
      </div>
      <hr>
      <center>
        © Copyright Dinas Kominfostan Deli Serdang. All Rights Reserved
      </center>
      <br>
    </section>

   <!-- Optional JavaScript; choose one of the two! -->

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <!-- script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

   <!-- Option 2: Separate Popper and Bootstrap JS -->

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

   <!-- font awesome -->
   <!-- <script type="text/javascript" src="asset/fontawesome-free-6.3.0-web/js/all.min.js"></script> -->
  </body>
  </html>
