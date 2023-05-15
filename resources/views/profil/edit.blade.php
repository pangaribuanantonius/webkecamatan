@extends('admin')
@section('content')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Data</h6>
	</div>
	<div class="card-body">
		<form method="post" action="{{ route ('profil.edit', ['profil' => $profil]) }}" enctype="multipart/form-data">
			@csrf
			@method('PATCH')
			<input type="hidden" name="id">
			<div class="form-group">
				<label>Judul/Kategori</label>
				<input type="text" name="judul" value="{{ $profil->judul }}" class="form-control">
			</div>
			<div class="form-group">
				<label>Isi/Keterangan</label>
				<textarea id="konten" name="isi" style="height: 100px;" class="form-control">{{ $profil->isi }}</textarea>
			</div>
			<button class="btn btn-success btn-icon-split">
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
                    <form method="post" action="{{ route('profil.delete', ['profil'=>$profil]) }}" enctype="multipart/form-data">
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
@endsection