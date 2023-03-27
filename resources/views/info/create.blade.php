@extends('admin')
@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Data</h6>
	</div>
	<div class="card-body">
		<form method="post" action="{{ route('info.store') }}" enctype="multipart/form-data">
			@csrf
			@method('POST')
			<div class="form-group">
				<label>Isi</label>
				<input type="text" name="isi" class="form-control">
			</div>
			<div align="right">
				<button class="btn btn-success btn-icon-split">
					<span class="icon text-white-50">
						<i class="fas fa-check"></i>
					</span>
					<span class="text">Simpan</span>
				</button>
			</div>
		</form>
	</div>
</div>
@endsection