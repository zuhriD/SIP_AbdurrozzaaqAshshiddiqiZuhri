@extends('main')

@section('title','Users')

@section('breadcrumbs')
{{-- expr --}}
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Users</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="">Users</a></li>
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
					<strong>Data Users</strong>
				</div>

				<div class="row">
					<div class="col-md-4 offset-md-2">
						<form action="/search" method="get">
							<div class="input-group">
								<input type="search" name="search" placeholder="Cari Nama" class="form-control">
								<span class="input-control-prepend">
									<button type="submit" class="btn btn-primary" >Search</button>
								</span> 
							</div>

						</div>
						<div class="pull-right">

							@if(session('role_id') == 1)
							<a href="{{ url('user/add') }}" class="btn btn-success btn-sm">
								<i class="fa fa-plus"></i> Add
							</a>
							<button type="button" class="btn btn-danger btn-sm" id="deleteAllSelectedR">
								<i class="fa fa-minus-square"></i> Delete Selected
							</button>
							<a href="{{ url('exportData') }}" class="btn btn-light btn-sm" >
								<i class="fa fa-cloud-download"></i> Export
							</a>
						</form>
						<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#staticModal">
							<i class="fa fa-cloud-upload"></i> Import
						</button>
						@endif
						

					</div>

				</div>
				
			</div>
			<div class="card-body table-responsive">
				<table class=" table table-bordered">
					<thead>
						<tr>
							<th>NO</th>
							<th>Name</th>
							<th>Username</th>
							<th>Email</th>
							<th>Create At</th>
							<th>Update At</th>
							@if(session('role_id') == 1)
							<th>Action</th>
							<th><input type="checkbox" id="checkBoxAll"></th>
							@endif
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $no => $data)
						<tr id="sid{{$data->id}}">
							<td>{{ $users->firstItem()+$no}}</td>
							<td>{{ $data->name }}</td>
							<td>{{ $data->username }}</td>
							<td>{{ $data->email }}</td>
							<td>{{ $data->created_at }}</td>
							<td>{{ $data->updated_at }}</td>
							@if(session('role_id') == 1)
							<td class="text-center">
								<a href="{{ url('profil/' .$data->id) }}" class="btn btn-warning btn-sm">
									<i class="fa fa-eye"></i>
								</a>
								<a href="{{ url('user/edit/' .$data->id) }}" class="btn btn-primary btn-sm">
									<i class="fa fa-pencil"></i>
								</a>
								<form action="{{ url('user/' .$data->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
									@method('delete')
									@csrf
									<button class="btn btn-danger btn-sm">
										<i class="fa fa-trash"></i>
									</button>
								</form>
								
							</td>
							<td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$data->id}}"></td>
							@endif
						</tr>
						@endforeach
					</tbody>
				</table>
				{{$users->links()}}
			</div>

		</div>
		
	</div><!-- .animated -->
</div><!-- .content -->
<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticModalLabel">Import Data</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ url('user/import') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<input type="file" name="import">
					</div>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Import</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
