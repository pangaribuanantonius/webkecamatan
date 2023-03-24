<br><br><br><br><br>
@extends('main')
@section('layout')
<section>
  <div class="container">
    <h1><center>Video</center></h1>
    <div class="row">
      @foreach($videoall as $vidall)
      <div class="col-md-4">
        <div class="card">
            <iframe src="https://www.youtube.com/embed/{{ $vidall->link }}"></iframe>
            <div class="card-body">
              <p class="card-text" align="justify">
                {{$vidall->judul}}
              </p>
            </div>
        </div><br>
      </div>
      @endforeach
    </div>
  </div>
</section><br><br>
@endsection