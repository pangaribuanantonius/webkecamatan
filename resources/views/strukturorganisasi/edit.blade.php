@extends('admin')
@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Struktur Organisasi</h6>
	</div>
	<div class="card-body">
		<form method="post" action="{{ route ('strukturorganisasi.edit', ['strukturorganisasi' => $strukturorganisasi]) }}" enctype="multipart/form-data">
			@csrf
			@method('PATCH')
			<input type="hidden" name="id">
			<div class="form-group">
				<label>Kategori</label>
				<input type="text" name="kategori" value="{{ $strukturorganisasi->kategori }}" class="form-control" readonly>
			</div>
			<div class="form-group">
				<label>Isi/Keterangan</label>
				<textarea id="konten" name="isi" style="height: 100px;" class="form-control">{{ $strukturorganisasi->isi }}</textarea>
			</div>
			<div class="form-group">
				<input type="file" id="file" name="gambar" accept="image/*">
			</div>
			<div class="form-group">
				<img src="{{ \URL::to('').'/konten/gambar/'. $strukturorganisasi->gambar}}" width="100">
			</div>

			<div class="form-group">
				@error('gambar')
				<span class="text-danger">{{ $message }}</span>
				@enderror
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