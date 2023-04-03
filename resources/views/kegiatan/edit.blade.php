@extends('admin')
@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Data</h6>
	</div>
	<div class="card-body">
		<form method="post" action="{{ route('kegiatan.edit', ['kegiatan' => $kegiatan]) }}" enctype="multipart/form-data">
			@csrf
			@method('PATCH')
			<input type="hidden" name="id_berita">
			<div class="form-group">
				<label>Judul/Tema</label>
				<input type="text" name="judul_berita" value="{{ $kegiatan->judul_berita }}" class="form-control">
			</div>

			<div class="form-group">
				<label>Isi/Keterangan</label>
				<textarea id="konten" name="isi_berita" style="height: 100px;" class="form-control">{{ $kegiatan->isi_berita }}</textarea>
			</div>

			<div class="form-group">
				<label>Gambar</label>
				<br>
				<input type="file" name="foto_berita">
			</div>

			<button class="btn btn-success btn-icon-split" type="submit">
				<span class="icon text-white-50">
					<i class="fas fa-check"></i>
				</span>
				<span class="text">Simpan</span>
			</button>
		</form>
	</div>
</div>
@endsection