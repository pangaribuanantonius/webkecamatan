<br><br><br><br><br>
@extends('main')
@section('layout')
    <section>
      <div class="container">
        <div class="row">
          <div class="card col-8" align="justify">
            <p>
              <h2><strong>Kepegawaian</strong></h2>
              <br>
              <table class="table table-bordered" bordered="1" width="100%" cellspacing="0" cellpadding="1">
                <thead>
                  <tr>
                    <th>Nama Desa</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($desa as $pegawai)
                  <tr>
                    <td>{{$pegawai->nama}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </p>
          </div>
          <div class="col-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
        </div>
      </div>
    </section><br><br>
@endsection
