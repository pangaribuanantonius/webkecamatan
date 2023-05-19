<br><br><br><br>
@extends('main')
@section('layout')
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-9" align="justify">
            <h2>Visi dan Misi<hr></h2>
             @foreach($visimisi as $vm)
            <p>
              <h4><strong>{{$vm->kategori}}</strong></h4>
              {!! nl2br($vm->isi) !!}
            </p>
             @endforeach
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
