@extends('main')

@section('title','Users')

@section('breadcrumbs')
{{-- expr --}}
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Roles</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="">Roles</a></li>
					<li class="active">Data</li>
				</ol>
			</div>
		</div>
	</div>
</div>
@endsection

@section('content')
{{-- expr --}}
<div class="content mt-3">
	<div class="animated fadeIn">
		@if (session('status'))
		<div class="alert alert-success">
			{{ session('status') }}
		</div>
		@endif
		<div class="card">
			<div class="card-header">
				<div class="pull-left">
					<strong>Data Roles</strong>
				</div>
				<div class="pull-right">
					<a href="{{ url('role/add') }}" class="btn btn-success btn-sm">
						<i class="fa fa-plus"></i>Add
					</a>
				</div>
			</div>
			<div class="card-body table-responsive">
				<table class=" table table-bordered">
					<thead>
						<tr>
							<th>NO</th>
							<th>Name</th>
							<th>Create At</th>
							<th>Update At</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($roles as $data)
						<tr>
							<td>{{ $loop->iteration}}</td>
							<td>{{ $data->name }}</td>
							<td>{{ $data->created_at }}</td>
							<td>{{ $data->updated_at }}</td>
							<td class="text-center">
								<a href="{{ url('role/edit/' .$data->id) }}" class="btn btn-primary btn-sm">
									<i class="fa fa-pencil"></i>
								</a>
								<form action="{{ url('role/' .$data->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
									@method('delete')
									@csrf
									<button class="btn btn-danger btn-sm">
										<i class="fa fa-trash"></i>
									</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>

		</div>
		
	</div><!-- .animated -->
</div><!-- .content -->
@endsection