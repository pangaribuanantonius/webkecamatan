@extends('admin')
@section('content')

<div class="row">
	<div class="col-md-8">
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Form Data</h6>
			</div>
			<div class="card-body">
				<form method="post" action="{{ route('kegiatan.store') }}" enctype="multipart/form-data">
					@csrf
					@method('POST')
					<div class="form-group">
						<label>Judul/Tema</label>
						<input type="text" name="judul_berita" class="form-control" required="required">
					</div>

					<div class="form-group">
						<label class="required">Isi/Keterangan</label>
						<textarea id="konten" name="isi_berita" style="height: 100px;" class="form-control" required></textarea>
					</div>
					@error('isi_berita')
					<span class="text-danger">{{ $message }}</span> <br>
					@enderror

					<div class="form-group">
						<label>Gambar</label>
						<br>
						<input type="file" id="file" name="foto_berita" accept="image/*" required="required">
					</div>
					@error('foto_berita')
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
	</div>

	<div class="col-md-4">
		@include('berkas.index')
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

