<br><br><br><br>
@extends('main')
@section('layout')
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-9" align="justify">
            <h2>Kepegawaian</h2><hr>
            <table class="table table-striped table-bordered " bordered="1" width="100%" cellspacing="0" cellpadding="1"> 
                <thead>
                  <!-- <tr class="text-center">
                    <th>NIP</th>
                    <th>NAMA</th>
                    <th>GOLONGAN</th>
                    <th>JABATAN</th>
                  </tr> -->
                </thead>
                <tbody>
                  <tr class="text-center">
                    <th>NAMA</th>
                    <th>JABATAN</th>
                  </tr>
                  @foreach($kepegawaian as $pegawai)
                  <tr>
                    <td>{{$pegawai->nama}}</td>
                    <td>{{$pegawai->jabatan}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
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
    </section>
    <br>
    <br>

    <section>
      <div class="container-fluid">
        <h2>Profil Pegawai</h2><hr>
        <div class="row" align="center">
          @foreach($kepegawaian as $pegawai)
          <div class="col-lg-3">
            <div class="card border border-3 shadow" style="width: 16rem; border-radius:10px;">
              <div class="card-header bg-info" style="border-radius:6px">
                <p>
                  <br>
                  <img class="card-img-top" src="{{ URL::asset('/konten/gambar/1680170716.jpg') }}" style="width: 120px; height: 120px;border-radius:100%;" alt="Card image cap">
                </p>
              </div>
              <div class="card-body">
                <h6>{{$pegawai->nama}}</h6>
                <small class="card-text">{{$pegawai->golongan}}<br>{{$pegawai->jabatan}}</small>
              </div>
            </div><br>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- <section>
      <div class="container">
        <div class="row">
@foreach($kepegawaian as $pegawai)
          <div class="col-lg-6">
            <div class="card shadow">
              <br>
              <div class="container">
                <div class="row">
                <div class="col-sm-3">
                  <img class="card-img-top" src="{{ URL::asset('/konten/gambar/1680170716.jpg') }}" style="width: 100px; height: 100px;border-radius:100%;" alt="Card image cap">
                </div>
                <div class="col-sm-9">
                  <h5>{{$pegawai->nama}}</h5>
                  <p>
                    {{$pegawai->golongan}}
                    <br>
                    {{$pegawai->jabatan}}
                  </p>
                </div>
              </div>
              </div>
              <br>
            </div><br>
          </div>
          @endforeach
          
        </div>
      </div>
    </section> -->

@endsection
