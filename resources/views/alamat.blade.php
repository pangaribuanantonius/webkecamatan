<br><br><br><br>
@extends('main')
@section('layout')
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-9" align="justify">
            <p>
              <iframe src="{{$settings->map}}" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
            <p>
              <strong>Hubungi Kami</strong>
              <br>
              {!! nl2br($settings->alamat) !!}
            </p>
            <p>
                <strong>No. telepon</strong> : {{$settings->telpon}}
            </p>
          </div>
          <div class="col-lg-3 mt-2">
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
          </div>
        </div>
      </div>
    </section><br><br>
@endsection

