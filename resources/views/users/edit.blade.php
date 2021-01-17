@extends('main')

@section('title','Users')

@section('breadcrumbs')
{{-- expr --}}
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Edit User</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="">Users</a></li>
					<li class="active">Edit</li>
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
		<div class="card">
			<div class="card-header">
				<div class="pull-left">
					<strong>Edit User</strong>
				</div>
				<div class="pull-right">
					<a href="{{ url('user') }}" class="btn btn-secondary btn-sm">
						<i class="fa fa-undo"></i> Back
					</a>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col col-md-4">
						<img class="rounded-circle mx-auto d-block" style="max-width: 60%;" src="{{asset('images/default.png')}}" alt="Card image cap">
					</div>
					<div class="col-md-4 ">
						<form action="{{ url('user/' .$user->id) }}" method="post">
							@method('patch')
							@csrf
							<div class="form-group">
								<label>Nama User</label>
								<input type="text" name="name" class="form-control" value="{{$user->name}}" autofocus required>
							</div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" value="{{$user->username}}" autofocus required>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="text" name="email" class="form-control" value="{{$user->email}}"  autofocus required>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password" class="form-control" value="{{$user->password}}" autofocus required>
							</div>
							<button type="submit" class="btn btn-success">Save</button>
						</form>
					</div>
				</div>
			</div>

		</div>
		
	</div><!-- .animated -->
</div><!-- .content -->
@endsection