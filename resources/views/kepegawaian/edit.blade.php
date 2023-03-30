@extends('admin')
@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Data</h6>
	</div>
	<div class="card-body">
		<form method="post" action="{{ route ('kepegawaian.edit', ['kepegawaian' => $kepegawaian]) }}" enctype="multipart/form-data">
			@csrf
			@method('PATCH')
			<input type="hidden" name="id">
			<div class="form-group">
				<label>NIP</label>
				<input type="text" name="nip" value="{{ $kepegawaian->nip }}" class="form-control">
			</div>

			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" value="{{ $kepegawaian->nama }}" class="form-control">
			</div>

			<div class="form-group">
				<label>Golongan</label>
				<input type="text" name="golongan" value="{{ $kepegawaian->golongan }}" class="form-control">
			</div>

			<div class="form-group">
				<label>Jabatan</label>
				<input type="text" name="jabatan" value="{{ $kepegawaian->jabatan }}" class="form-control">
			</div>

			<button class="btn btn-success btn-icon-split">
				<span class="icon text-white-50">
					<i class="fas fa-check"></i>
				</span>
				<span class="text">Simpan</span>
			</button>
		</form>

		<form method="post" action="{{ route('kepegawaian.delete', ['kepegawaian'=>$kepegawaian]) }}" enctype="multipart/form-data">
			@csrf
			@method('DELETE')
			<button type="submit" class="btn btn-danger btn-icon-split">
				<span class="icon text-white-50">
					<i class="fas fa-trash"></i>
				</span>
				<span class="text">Hapus</span>
			</button>
		</form>
	</div>
</div>
@endsection