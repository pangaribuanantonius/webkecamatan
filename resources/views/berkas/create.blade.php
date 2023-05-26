@extends('admin')
@section('content')

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
  {{ session('success') }}
</div>
@elseif(session()->has('update'))
<div class="alert alert-success" role="alert">
  {{ session('update') }}
</div>
@elseif(session()->has('delete'))
<div class="alert alert-success" role="alert">
  {{ session('delete') }}
</div>
@endif


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

		<form method="post" action="{{ route('berkas.store') }}" enctype="multipart/form-data">
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
		</form>
		

	</div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/compressorjs/1.2.1/compressor.min.js"></script>
	<script type="text/javascript">
		document.getElementById('file').addEventListener('change', (e) => {
			const file = e.target.files[0];

			if (!file) {
				return;
			}

			new Compressor(file, {
				quality: 0.6, //turunkan kualitas 605

				success(result){
					console.log(result)
					//tangkap lagi input type filenya
					fileInput = document.getElementById('file');
					// buat object datatransfer untuk memasuka file hasil compress ke input type file
					let fileaku = new File([result], "gambar.jpg")
					const dataTransfer = new DataTransfer();
					dataTransfer.items.add(fileaku);
					fileInput.files = dataTransfer.files;
					console.log(fileaku)
				},
				error(err) {
					console.log(err.message);
				},
			});

		});
	</script>


@endsection