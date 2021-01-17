@extends('main')

@section('title','Profile')

@section('breadcrumbs')
{{-- expr --}}
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Profile</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
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
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					
					<div class="card-body">
						<div class="mx-auto d-block">
							@if ($user != null)
							<img class="rounded-circle mx-auto d-block" style="max-width: 60%;" src="{{asset('images/'.$user->foto_profil)}}" alt="Card image cap">
							<h5 class="text-sm-center mt-2 mb-1">{{$user->nama_lengkap}}</h5>
							<div class="location text-sm-center"><i class="fa fa-map-marker"></i> {{$user->alamat}}</div>
							<div class="location text-sm-center"><i class="fa fa-calendar"></i> {{$user->tgl_lahir}}</div>
							@else
							<img class="rounded-circle mx-auto d-block" style="max-width: 60%;" src="{{asset('images/default.png')}}" alt="Card image cap">
							<h5 class="text-sm-center mt-2 mb-1">None</h5>
							<div class="location text-sm-center"><i class="fa fa-map-marker"></i> None</div>
							<div class="location text-sm-center"><i class="fa fa-calendar"></i> None</div>
							@endif
							
						</div>
						<hr>
						<div class="card-text text-sm-center">
							<a href="#"><i class="fa fa-facebook pr-1"></i></a>
							<a href="#"><i class="fa fa-twitter pr-1"></i></a>
							<a href="#"><i class="fa fa-linkedin pr-1"></i></a>
							<a href="#"><i class="fa fa-pinterest pr-1"></i></a>
						</div>
					</div>
				</div><!-- .animated -->
			</div>
			<div class="col-sm-8">
				<div class="card">
					<div class="card-header">
						<div class="pull-left">
							<strong>Detail Profile</strong>
						</div>
					</div>
					<div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        	@if ($user != null)
                        		<div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label" style="font-weight: bold">Nama Lengkap</label></div>
                            <div class="col-12 col-md-9">
                              <label class="form-control-label">{{$user->nama_lengkap}}</label>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label"style="font-weight: bold">Jenis Kelamin</label></div>
                            <div class="col-12 col-md-9">
                              <label class="form-control-label">{{$user->gender}}</label>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label"style="font-weight: bold">Tanggal Lahir</label></div>
                            <div class="col-12 col-md-9">
                              <label class="form-control-label">{{$user->tgl_lahir}}</label>
                            </div>
                          </div>
                           <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label"style="font-weight: bold">Alamat</label></div>
                            <div class="col-12 col-md-9">
                              <label class="form-control-label">{{$user->alamat}}</label>
                            </div>
                          </div>
                           <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label"style="font-weight: bold">Portofolio</label></div>
                            <div class="col-12 col-md-9">
                              <label class="form-control-label">{{$user->portofolio}}</label>
                            </div>
                          </div>
                           <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label"style="font-weight: bold">Pekerjaan</label></div>
                            <div class="col-12 col-md-9">
                              <label class="form-control-label">{{$user->pekerjaan}}</label>
                            </div>
                          </div>
                        	@else
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label" style="font-weight: bold">Nama Lengkap</label></div>
                            <div class="col-12 col-md-9">
                              <label class="form-control-label">None</label>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label"style="font-weight: bold">Jenis Kelamin</label></div>
                            <div class="col-12 col-md-9">
                              <label class="form-control-label">None</label>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label"style="font-weight: bold">Tanggal Lahir</label></div>
                            <div class="col-12 col-md-9">
                              <label class="form-control-label">None</label>
                            </div>
                          </div>
                           <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label"style="font-weight: bold">Alamat</label></div>
                            <div class="col-12 col-md-9">
                              <label class="form-control-label">None</label>
                            </div>
                          </div>
                           <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label"style="font-weight: bold">Portofolio</label></div>
                            <div class="col-12 col-md-9">
                              <label class="form-control-label">None</label>
                            </div>
                          </div>
                           <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label"style="font-weight: bold">Pekerjaan</label></div>
                            <div class="col-12 col-md-9">
                              <label class="form-control-label">None</label>
                            </div>
                          </div>
                          @endif
                        </form>
                      </div>
                      <div class="card-footer">
                        <a href="{{ url('user/editView') }}" class="btn btn-primary btn-sm">
                          <i class="fa fa-pencil"></i> Edit
                        </a>
                      </div>
                    </div>
				</div><!-- .animated -->
			</div>
		</div>
		
	</div><!-- .content -->
	@endsection