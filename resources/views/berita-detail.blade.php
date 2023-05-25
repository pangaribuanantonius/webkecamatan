<br><br><br><br>
@extends('main')
@section('layout')
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-9" align="justify">
        <h2>{{ $berita->judul_berita }}</h2>
        <h6>{{ $carbon->parse($berita->created_at)->isoFormat('D MMMM Y') }}</h6><hr>
        <p>
          <img src="{{ \URL::to('').'/konten/foto_berita/'. $berita->foto_berita}}" class="card-img-top" alt="...">
          {!! ($berita->isi_berita) !!}
        </p>
      </div>
      <!-- <div class="col-lg-3 mt-2">
       <p>
          <h4>Profil</h4>
          <a class="navbar-brand" href="#">Tentang</a><br>
          <a class="navbar-brand" href="#">Visi dan Misi</a><br>
          <a class="navbar-brand" href="#">Struktur Organisasi</a><br>
          <a class="navbar-brand" href="#">Kepegawaian</a><br>
          <a class="navbar-brand" href="#">Desa/Kelurahan</a><br>
       </p>

       <p>
          <h4>Pemerintahan</h4>
          <a class="navbar-brand" href="#">Kepegawaian</a><br>
          <a class="navbar-brand" href="#">Desa</a><br>
       </p>

       <p>
          <h4>Link Terkait</h4>
          <a class="navbar-brand" href="#">Portal Deli Serdang</a><br>
          <a class="navbar-brand" href="#">PPID</a><br>
       </p>
      </div> -->
    </div>
  </div>
</section><br><br>
@endsection

