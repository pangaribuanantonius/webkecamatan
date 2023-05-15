@extends('superadmin') 
@section('content2')
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Form Data</h6>
	</div>
	<div class="card-body">
		<form method="post" action="{{ route ('user.edit', ['user' => $user]) }}" enctype="multipart/form-data">
			@csrf
			@method('PATCH')
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" value="{{$user->nama}}" class="form-control">
			</div>

			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" value="{{$user->username}}" class="form-control">
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" value="{{$user->username}}" class="form-control" required>
			</div>

			<div class="form-group">
				<label>Level</label>
				<select name="level" class="form-control">
					<option value="{{$user->level}}">{{$user->level}}</option>
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