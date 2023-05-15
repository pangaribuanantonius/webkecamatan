@extends('superadmin') 
@section('content2')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Data</h6>
	</div>
	<div class="card-body">
		<form method="post" action="{{ route('user.store') }}" enctype="multipart/form-data">
			@csrf
			@method('POST')
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control">
			</div>

			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control">
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
			</div>

			<div class="form-group">
				<label>Level</label>
				<select name="level" class="form-control">
					<option value="0">Pilih</option>
					<option value="Admin">Admin</option>
					<option value="Super Admin">Super Admin</option>
				</select>
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

<script type="text/javascript">
	function Angkasaja(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	}
</script>

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
                    <form method="post" action="{{ route('user.delete', ['user'=>$user]) }}" enctype="multipart/form-data">
                    	@csrf
                    	@method('DELETE')
                    	<button type="submit" class="btn btn-primary btn-icon-split">
                    		<span class="text">Hapus</span>
                    	</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection