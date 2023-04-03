@extends('admin')
@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Data</h6>
	</div>
	<div class="card-body">
		<form method="post" action="{{ route ('desa.edit', ['desa' => $desa]) }}" enctype="multipart/form-data">
			@csrf
			@method('PATCH')
			<input type="hidden" name="id">
			<div class="form-group">
				<label>Nama Desa</label>
				<input type="text" name="nama" value="{{ $desa->nama }}" class="form-control">
			</div>

			<button class="btn btn-success btn-icon-split">
				<span class="icon text-white-50">
					<i class="fas fa-check"></i>
				</span>
				<span class="text">Simpan</span>
			</button>
		</form>
		<form method="post" action="{{ route('desa.delete', ['desa'=>$desa]) }}" enctype="multipart/form-data">
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