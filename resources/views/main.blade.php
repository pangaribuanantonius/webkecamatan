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

    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

    <!-- data aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <title>{{$settings->nama}}</title>
  </head>
  <body>


    <section>
      <!-- <nav class="navbar navbar-expand-lg navbar-dark text-white fixed-top" style="background: rgb(10,10,10);
background: linear-gradient(180deg, rgba(10,10,10,0.8211659663865546) 100%, rgba(255,255,255,0) 100%);"> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white fixed-top">
      <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ URL::asset('/konten/logo/logo.png') }}" style="width:50px;"><small>{{$settings->nama}}</small></a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="./">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Profil
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="{{ route('tentang') }}">Tentang</a></li>
                <li><a class="dropdown-item" href="{{ route('visimisi') }}">Visi dan Misi</a></li>
                <li><a class="dropdown-item" href="{{ route('strukturorganisasi') }}">Struktur Organisasi</a></li>
              </ul> 
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Pemerintahan
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="{{ route('kepegawaian') }}">Pejabat</a></li>
                <li><a class="dropdown-item" href="{{route('desa')}}">Desa/Kelurahan</a></li>
              </ul> 
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Layanan Terkait
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="https://portal.deliserdangkab.go.id">Portal Deli Serdang</a></li>
              </ul>
            </li>
	    <li class="nav-item">
	      <a class="nav-link" href="https://ppid.deliserdangkab.go.id">PPID</a>
	    </li>
	    <li class="nav-item">
              <a class="nav-link" href="{{ route('alamat') }}">Kontak Kami</a>
            </li>
          </ul>
          <div class="d-flex mt-2">
            <h5><a class="text-white" href="{{$settings->fb}}"><i class="fa-brands fa-facebook"></i></a></h5>&nbsp;&nbsp;&nbsp;&nbsp;
            <h5><a class="text-white" href="{{$settings->ig}}"><i class="fa-brands fa-instagram"></i></a></h5>&nbsp;&nbsp;&nbsp;&nbsp;
            <h5><a class="text-white" href="{{$settings->yt}}"><i class="fa-brands fa-youtube"></i></a></h5>
          </div>
        </div>
      </div>
    </nav>
    </section>

    <div data-aos="fade-up">
    @yield('layout')
    </div>

    <section class="bg-dark text-white mt-5">
      <div class="container">
        <!--<div class="row text-white">
           <div class="col-md-3">
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
          <div class="col-md-2">
           <p>
             <h4>Profil</h4>
             <br>
             <a class="text-light" style="text-decoration:none;" href="{{ route('tentang') }}">
               <i class="fa-solid fa-angle-right">&nbsp;&nbsp;</i>Tentang
             </a>
             <br><br>
             <a class="text-light" style="text-decoration:none;" href="#">
               <i class="fa-solid fa-angle-right">&nbsp;&nbsp;</i>Visi dan Misi
             </a>
             <br><br>
             <a class="text-light" style="text-decoration:none;" href="#">
               <i class="fa-solid fa-angle-right">&nbsp;&nbsp;</i>Struktur Organisasi
             </a>
             <br><br>
             <a class="text-light" style="text-decoration:none;" href="#">
               <i class="fa-solid fa-angle-right">&nbsp;&nbsp;</i>Potensi Kecamatan
             </a>
           </p>
          </div>
          <div class="col-md-2">
            <p>
             <h4>Pemerintahan</h4>
             <br>
             <a class="text-light" style="text-decoration:none;" href="{{ route('kepegawaian') }}">
               <i class="fa-solid fa-angle-right">&nbsp;&nbsp;</i>Kepegawaian
             </a>
             <br><br>
             <a class="text-light" style="text-decoration:none;" href="{{ route('desa') }}">
               <i class="fa-solid fa-angle-right">&nbsp;&nbsp;</i>Desa
             </a>
           </p>
          </div>
          <div class="col-md-5" align="center">
            <br>
            <p>
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.1194531755973!2d98.86853691414554!3d3.5599536514840713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031496a5019990f%3A0xf6fd7a86540fde97!2sKANTOR%20DINAS%20KOMINFO%20(Komunikasi%20Dan%20Informatika)!5e0!3m2!1sid!2sid!4v1678071831150!5m2!1sid!2sid" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </p>
          </div>
        </div>-->
      </div>
      <hr>
      <center>
       Copyrights © 2023 All Rights Reserved<br>{{$settings->nama}}<br>Kabupaten Deli Serdang
      </center>
      <br>
    </section>



   <!-- Optional JavaScript; choose one of the two! -->

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

   <!-- Option 2: Separate Popper and Bootstrap JS -->

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

   <!-- font awesome -->
   <!-- <script type="text/javascript" src="asset/fontawesome-free-6.3.0-web/js/all.min.js"></script> -->

   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
    AOS.init();
   </script>

  </body>
  </html>
