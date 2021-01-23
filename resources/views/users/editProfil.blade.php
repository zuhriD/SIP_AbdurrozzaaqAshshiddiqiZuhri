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
					<li><a href="">Profile</a></li>
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
					<a href="{{ url('home') }}" class="btn btn-secondary btn-sm">
						<i class="fa fa-undo"></i> Back
					</a>
				</div>
			</div>
			<div class="card-body">
				@if ($user != null)
				<div class="row">
					<div class="col col-md-4">
						<form action="{{ url('profil/edit/'.$user->id) }}" method="post" enctype="multipart/form-data">
							@method('patch')
							@csrf
							<img class="rounded-circle mx-auto d-block" style="max-width: 60%;" src="{{asset('images/'.$user->foto_profil)}}" alt="Card image cap" id="blah">
							<input type="file" id="imgInp" name="gambar" class="form-control-file" style="margin-left: 80px;margin-top: 10px;">
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" name="name" class="form-control" value="{{session('nama')}}" autofocus required>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
								<div class="form-check">
									<div class="radio">
										<label for="radio1" class="form-check-label ">
											@if ($user->gender == "Laki-laki")
											<input type="radio" id="radio1" name="gender" value="Laki-laki" class="form-check-input" checked>Laki-laki
										</label>
									</div>
									<div class="radio">
										<label for="radio2" class="form-check-label ">
											<input type="radio" id="radio2" name="gender" value="Perempuan" class="form-check-input">Perempuan
										</label>
									</div>
									@else
									<div class="radio">
										<label for="radio1" class="form-check-label ">
											<input type="radio" id="radio1" name="gender" value="Laki-laki" class="form-check-input" >Laki-laki
										</label>
									</div>
									<div class="radio">
										<label for="radio2" class="form-check-label ">
											<input type="radio" id="radio2" name="gender" value="Perempuan" class="form-check-input" checked>Perempuan
										</label>
									</div>
									@endif
								</div>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input class="form-control" type="date" name="tgl_lahir" value="{{$user->tgl_lahir}}" id="example-date-input">
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" name="alamat" class="form-control" value="{{$user->alamat}}" autofocus required>
							</div>
							<div class="form-group">
								<label>Portofolio</label>
								<textarea class="form-control" name="portofolio">{{$user->portofolio}} </textarea>
							</div>
							<div class="form-group">
								<label>Pekerjaan</label>
								<input type="text" name="pekerjaan" class="form-control" value="{{$user->pekerjaan}}" autofocus required>
							</div>
							<button type="submit" class="btn btn-success">Save</button>
						</form>
					</div>
				</div>
				@else
				<div class="row">
					<div class="col-md-4 offset-md-4">
						<form action="{{ url('profil/create') }}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" name="name" class="form-control" value="{{session('nama')}}" autofocus required>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
								<div class="form-check">
									<div class="radio">
										<label for="radio1" class="form-check-label ">
											<input type="radio" id="radio1" name="gender" value="Laki-laki" class="form-check-input">Laki-laki
										</label>
									</div>
									<div class="radio">
										<label for="radio2" class="form-check-label ">
											<input type="radio" id="radio2" name="gender" value="Perempuan" class="form-check-input">Perempuan
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input class="form-control" type="date" name="tgl_lahir" id="example-date-input">
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" name="alamat" class="form-control" autofocus required>
							</div>
							<div class="form-group">
								<label>Portofolio</label>
								<textarea class="form-control" name="portofolio"> </textarea>
							</div>
							<div class="form-group">
								<label>Pekerjaan</label>
								<input type="text" name="pekerjaan" class="form-control" autofocus required>
							</div>
							<div class="form-group">
								<label>Foto Profil</label>
								<input type="file" id="file-input" name="gambar" class="form-control-file">
							</div>
							<button type="submit" class="btn btn-success">Save</button>
						</form>
					</div>
				</div>
				@endif
			</div>

		</div>
		
	</div><!-- .animated -->
</div><!-- .content -->
@endsection