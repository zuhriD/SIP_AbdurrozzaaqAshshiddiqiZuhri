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
				<div class="pull-right">
					@if(session('role_id') == 1)
					<a href="{{ url('user/add') }}" class="btn btn-success btn-sm">
						<i class="fa fa-plus"></i> Add
					</a>
					<button type="button" class="btn btn-danger btn-sm" id="deleteAllSelectedR">
						<i class="fa fa-minus-square"></i> Delete Selected
					</button>
					@endif
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
@endsection
