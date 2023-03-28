@extends('admin')
@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Data</h6>
	</div>
	<div class="card-body">
		<form method="post" action="{{ route('profil.store') }}" enctype="multipart/form-data">
			@csrf
			@method('POST')
			<div class="form-group">
				<label>Judul/Kategori</label>
				<input type="text" name="judul" class="form-control">
			</div>

			<div class="form-group">
				<label>Isi/Keterangan</label>
				<input type="text" name="isi" class="form-control">
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