@extends('main')

@section('layout')
<br><br><br>
<section>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <!--   <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div> -->
    <div class="carousel-inner">

 @php $i = 1; @endphp
 @foreach($slider as $slide)
      <div class="carousel-item {{ $i == '1' ? ' active':'' }}" data-bs-interval="2000">
        <img src="{{ \URL::to('').'/konten/slider/'. $slide->foto_halaman}}" class="d-block w-100" alt="...">
      </div>
      @php $i++; @endphp
@endforeach

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

 
<marquee class="bg-dark text-white">
    @foreach($marquee as $info)
    "{{$info->isi}}"  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    @endforeach
</marquee>

<br><br>

<section>
  <div class="container">
    <h2>Update terbaru</h2><hr>
    <div class="row">
      @foreach($berita as $news)
      <div class="col-md-6 col-lg-4">
        <div class="card border-2 shadow rouded">
          <a class="nav-link text-dark" href="{{route('berita-detail', $news->judul_berita )}}">
            <img src="{{ \URL::to('').'/konten/foto_berita/'. $news->foto_berita}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" align="justify">
                {{ Str::limit($news->judul_berita, 60) }}
                <br>
                <b><small>{{ $carbon->parse($news->created_at)->diffForHumans() }}</small></b>
              </p>
            </div>
          </a>
        </div><br>
      </div>
      @endforeach
    </div>
    <center>
    <a href="{{ route('beritaall') }}">
      <button type="button" class="btn btn-success" style="border-radius:25px;">Selengkapnya</button>
    </a>
    </center>
  </div>
</section>


<!-- <section>
  <div class="container">
    <h1><center>Video</center></h1>
    <div class="row">
      @foreach($video as $vid)
      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card">
          <iframe allow="fullscreen" src="https://www.youtube.com/embed/{{ $vid->link }}"></iframe>
          <div class="card-body">
            <p class="card-text" align="justify">
              {{ $vid->judul }}
            </p>
          </div>
        </div><br>
      </div>
      @endforeach
    </div>
    <a class="nav-link text-center text-dark" href="{{ route('videoall') }}">Selengkapnya</a>
  </div>
</section> -->


<!-- <section>
  <div class="container">
    <h1><center>Galeri</center></h1>
    <div class="row">
      @foreach($foto as $fot)
      <div class="col-6 col-sm-4 col-md-4">
        <div class="card">
          <div class="card-body">
            <img src="{{ \URL::to('').'/konten/foto_halaman/'. $fot->foto_halaman}}" class="card-img-top" alt="...">
          </div>
        </div><br>
      </div>
      @endforeach
    </div>
    <a class="nav-link text-center text-dark" href="#">Selengkapnya</a>
  </div>
</section>
<br><br> -->

<!-- <section align="center">
  <div class="container">
    <div class="row">
      <div class="col-3">
        <h1><i class="fa-sharp fa-solid fa-gear fa-2xl" style=""></i></h1><br>
        <p>
          <h3>menu 1</h3>
        </p>
      </div>
      <div class="col-3">
        <h1><i class="fa-sharp fa-solid fa-gear fa-2xl" style=""></i></h1><br>
        <p>
          <h3>menu 1</h3>
        </p>
      </div>
      <div class="col-3">
        <h1><i class="fa-sharp fa-solid fa-gear fa-2xl" style=""></i></h1><br>
        <p>
          <h3>menu 1</h3>
        </p>
      </div>
      <div class="col-3">
        <h1><i class="fa-sharp fa-solid fa-gear fa-2xl" style=""></i></h1><br>
        <p>
          <h3>menu 1</h3>
        </p>
      </div>
    </div>
  </div>
</section>
<br><br> -->

    <!-- <section class="mb-5">
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
    </section> -->
