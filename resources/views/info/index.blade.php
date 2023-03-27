@extends('admin')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Info</h1>
</div>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<a href="{{ route('info.create') }}" class="btn btn-primary btn-icon-split">
			<span class="icon text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="text">Tambah Data Baru</span>
		</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Isi/Keterangan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($runningtext as $info)
					<tr>
						<td>{{$info->isi}}</td>
						<td><a href="#"><i class="fas fa-edit"></i></a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection