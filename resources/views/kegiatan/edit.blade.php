@extends('admin')
@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Data</h6>
	</div>
	<div class="card-body">
		<form method="post" action="{{ route('kegiatan.edit', ['kegiatan' => $kegiatan]) }}" enctype="multipart/form-data">
			@csrf
			@method('PATCH')
			<input type="hidden" name="id_berita">
			<div class="form-group">
				<label>Judul/Tema</label>
				<input type="text" name="judul_berita" value="{{ $kegiatan->judul_berita }}" class="form-control">
			</div>

			<div class="form-group">
				<label>Isi/Keterangan</label>
				<textarea id="konten" name="isi_berita" style="height: 100px;" class="form-control">{{ $kegiatan->isi_berita }}</textarea>
			</div>

			<div class="form-group">
				<label>Gambar</label>
				<br>
				<input type="file" id="file" name="foto_berita" accept="image/*">
			</div>

			<div class="form-group">
				<img src="{{ \URL::to('').'/konten/foto_berita/'. $kegiatan->foto_berita}}" width="100">
			</div>

			@error('foto_berita')
			<span class="text-danger">{{ $message }}</span> <br><br>
			@enderror

			<button class="btn btn-success btn-icon-split" type="submit">
				<span class="icon text-white-50">
					<i class="fas fa-check"></i>
				</span>
				<span class="text">Simpan</span>
			</button>
			<a href="#" data-toggle="modal" data-target="#hapusModal" style="text-decoration:none">
				<button class="btn btn-danger btn-icon-split">
					<span class="icon text-white-50">
						<i class="fas fa-trash"></i>
					</span>
					<span class="text">Hapus</span>
				</button>
			</a>
		</form>
	</div>
</div>

<!-- Hapus Modal-->
    <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Peringatan !</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah yakin ingin Hapus ?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form method="post" action="{{ route('kegiatan.delete', ['kegiatan'=>$kegiatan]) }}" enctype="multipart/form-data">
                    	@csrf
                    	@method('DELETE')
                    	<button type="submit" class="btn btn-danger btn-icon-split">
                    		<span class="text">Hapus</span>
                    	</button>
                    </form>
                </div>
            </div>
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