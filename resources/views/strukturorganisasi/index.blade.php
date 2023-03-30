@extends('admin')
@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Struktur Organisasi</h6>
	</div>
	<div class="card-body">
		<form method="post" action="#" enctype="multipart/form-data">
			@csrf
			@method('PATCH')
			<input type="hidden" name="id">
			<div class="form-group">
				<label>Isi/Keterangan</label>
				<textarea id="konten" name="isi" style="height: 100px;" class="form-control">{{ $strukturorganisasi->isi }}</textarea>
			</div>
			<div class="form-group">
				<input type="file" name="gambar">
			</div>
			<div class="form-group">
				<img src="{{ \URL::to('').'/konten/gambar/'. $strukturorganisasi->gambar}}" width="100">
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