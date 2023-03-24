<br><br><br><br><br>
@extends('main')
@section('layout')
<section>
  <div class="container">
    <h1><center>Berita</center></h1>
    <div class="row">
      @foreach($beritaall as $newsall)
      <div class="col-md-4">
        <div class="card">
          <a class="nav-link text-dark" href="{{ route('berita-detail', $newsall->id_berita) }}">
            <img src="{{ \URL::to('').'/konten/foto_berita/'. $newsall->foto_berita}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" align="justify">
                {{$newsall->judul_berita}}
              </p>
            </div>
          </a>
        </div><br>
      </div>
      @endforeach
    </div>
  </div>
</section><br><br>
@endsection