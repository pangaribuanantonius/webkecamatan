<br><br><br><br><br>
@extends('main')
@section('layout')
    <form method="post" action="#" enctype="multipart/form-data">
  @csrf
  @method('PATCH')
  <input type="hidden" name="id_berita">

  <br>
  <div class="form-group">
    <label>Peberbit Buku</label>
    <input type="text" name="penerbit" value="{{ $berita->isi_berita }}" class="form-control">
  </div>
  <br>

  <input type="file" name="image">


  @error('image')
  <span class="text-danger">{{ $message }}</span> <br>
  @enderror
  <br><br>      
  <!-- <input class="btn btn-success" type="submit" name="simpan" value="Simpan" /> -->
  <button class="btn btn-success" type="submit" name="submit">Simpan</button>
</form>
@endsection

