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

<!-- <div class="flash-data" data-flashdata="{{ session()->get('flashdata') }}"></div> -->

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Settings</h1>
</div>
<div class="card shadow mb-4">
	<!-- <div class="card-header py-3">
		<a href="{{ route('user.create') }}" class="btn btn-primary btn-icon-split">
			<span class="icon text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="text">Tambah Data Baru</span>
		</a>
	</div> -->
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($settings as $pengaturan)
					<tr>
						<td>{{$pengaturan->nama}}</td>
						<td class="text-center">
							<a href="{{ route('settings.edit', $pengaturan->id) }}"><i class="fas fa-edit"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection