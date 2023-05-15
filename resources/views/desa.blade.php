<br><br><br><br>
@extends('main')
@section('layout')
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-9" align="justify">
            <p>
              <h2>Desa/Kelurahan<hr></h2>
              <table class="table table-striped table-bordered" border="1" width="100%" cellspacing="0" cellpadding="1">
               <!--  <thead>
                  <tr>
                    <th>Nama Desa</th>
                    <th>Kepala Desa/Lurah</th>
                  </tr>
                </thead> -->
                <tbody>
                  <tr class="text-center">
                    <th>Nama Desa</th>
                    <th>Kepala Desa/Lurah</th>
                  </tr>
                  @foreach($desa as $pegawai)
                  <tr>
                    <td>{{$pegawai->nama}}</td>
                    <td>{{$pegawai->kepala}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
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
