@extends('admin') 
@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Data</h6>
	</div>
	<div class="card-body">
		<form method="post" action="#" enctype="multipart/form-data">
			@csrf
			@method('PATCH')
			<div class="form-group">
				<label>Judul</label>
				<input type="text" name="judul" class="form-control" required="required" value="{{$slider->judul}}">
			</div>

			<div class="form-group">
				<label>Gambar</label>
				<br>
				<input type="file" name="foto_halaman">
			</div>

			<div class="form-group">
				<img src="{{ \URL::to('').'/konten/slider/'. $slider->foto_halaman}}" width="100">
			</div>

			@error('foto_halaman')
			<span class="text-danger">{{ $message }}</span> <br><br>
			@enderror

			<button class="btn btn-success btn-icon-split">
				<span class="icon text-white-50">
					<i class="fas fa-check"></i>
				</span>
				<span class="text">Simpan</span>
			</button>
		</form>
	</div>
</div>

<script type="text/javascript">
	function Angkasaja(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	}
</script>
@endsection