@extends('admin')
@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Data</h6>
	</div>
	<div class="card-body">
		<form method="post" action="{{ route('kegiatan.store') }}" enctype="multipart/form-data">
			@csrf
			@method('POST')
			<div class="form-group">
				<label>Judul/Tema</label>
				<input type="text" name="judul_berita" class="form-control" required="required">
			</div>

			<div class="form-group">
				<label class="required">Isi/Keterangan</label>
				<textarea id="konten" name="isi_berita" style="height: 100px;" class="form-control" required></textarea>
			</div>
			@error('isi_berita')
			<span class="text-danger">{{ $message }}</span> <br>
			@enderror

			<div class="form-group">
				<label>Gambar</label>
				<br>
				<input type="file" name="foto_berita" required="required">
			</div>

			<button class="btn btn-success btn-icon-split">
				<span class="icon text-white-50">
					<i class="fas fa-check"></i>
				</span>
				<span class="text">Simpan</span>
			</button>
		</form>
	</div>
</div>
@endsection