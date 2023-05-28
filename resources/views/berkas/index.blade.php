

<!-- Page Heading -->
<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Berkas</h1>
</div> -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Berkas</h6>
		<!-- <a href="" class="btn btn-primary btn-icon-split">
			<span class="icon text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="text">Tambah Data Baru</span>
		</a> -->
	</div>
	<div class="card-body">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Gambar</th>
						<th>Keterangan</th>
						<th>link</th>
					</tr>
				</thead>
				<tbody>
					@foreach($berkas as $file) 
					<tr>
						<td><img src="{{ \URL::to('').'/konten/berkas/'. $file->berkas}}" width="100"> </td>
						<td>{{ $file->keterangan }}</td>
						<td><input type="text" class="form-control" name="" value="http://localhost:81/webkecamatan/public/konten/berkas/{{ $file->berkas }}" readonly="readonly"></td>
					</tr>
					@endforeach
				</tbody>
			</table>
	</div>

	

		<!-- <form method="post" action="{{ route('berkas.store') }}" enctype="multipart/form-data">
			@csrf
			@method('POST')
			<div class="form-group">
				<label>Keterangan</label>
				<input type="text" name="keterangan" class="form-control" required="required">
			</div>

			@error('keterangan')
			<span class="text-danger">{{ $message }}</span> <br>
			@enderror

			<div class="form-group">
				<label>Gambar</label>
				<br>
				<input type="file" id="file" name="berkas" accept="image/*" required="required">
			</div>
			@error('foto_berita')
			<span class="text-danger">{{ $message }}</span> <br><br>
			@enderror

			<button class="btn btn-success btn-icon-split">
				<span class="icon text-white-50">
					<i class="fas fa-check"></i>
				</span>
				<span class="text">Upload</span>
			</button>
		</form> -->


			



	</div>



