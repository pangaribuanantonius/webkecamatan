<br><br><br><br>
@extends('main')
@section('layout')
<section>
  <div class="container">
    <h2>Berita</h2><hr>
    <div class="row">
      @foreach($beritaall as $newsall)
      <div class="col-md-4">
        <div class="card border-2 shadow rouded">
          <a class="nav-link text-dark" href="{{ route('berita-detail', $newsall->judul_berita) }}">
            <img src="{{ \URL::to('').'/konten/foto_berita/'. $newsall->foto_berita}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" align="justify">
                {{ Str::limit($newsall->judul_berita, 60) }}
                <br>
                <b><small>{{ $carbon->parse($newsall->created_at)->diffForHumans() }}</small></b>
              </p>
            </div>
          </a>
        </div><br>
      </div>
      @endforeach
    </div>
    {{$beritaall->appends(Request::except('page'))->links()}}
  </div>
</section><br><br>
@endsection