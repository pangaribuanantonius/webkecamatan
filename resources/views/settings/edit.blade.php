@extends('admin')
@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Data</h6>
	</div>
	<div class="card-body">
		<form method="post" action="{{ route('settings.edit', ['settings' => $settings]) }}" enctype="multipart/form-data">
			@csrf
			@method('PATCH')
			<input type="hidden" name="id">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" value="{{ $settings->nama }}" class="form-control">
			</div>

			<div class="form-group">
				<label>Alamat</label>
				<textarea name="alamat" class="form-control">{{ $settings->alamat }}</textarea>
				<!-- <input type="text" name="alamat" value="{{ $settings->alamat }}" class="form-control"> -->
			</div>

			<div class="form-group">
				<label>No Telepon</label>
				<input type="text" name="telpon" value="{{ $settings->telpon }}" class="form-control">
			</div>

			<div class="form-group">
				<label>Link Facebook</label>
				<input type="text" name="fb" value="{{ $settings->fb }}" class="form-control">
			</div>

			<div class="form-group">
				<label>Link Instagram</label>
				<input type="text" name="ig" value="{{ $settings->ig }}" class="form-control">
			</div>

			<div class="form-group">
				<label>Link Youtube</label>
				<input type="text" name="yt" value="{{ $settings->yt }}" class="form-control">
			</div>

			<div class="form-group">
				<label>Link Maps</label>
				<input type="text" name="map" value="{{ $settings->map }}" class="form-control">
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