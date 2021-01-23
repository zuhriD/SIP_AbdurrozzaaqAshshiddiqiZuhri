@extends('main')

@section('title','Dashboard')

@section('breadcrumbs')
{{-- expr --}}
<div class="breadcrumbs">
    <div class="col-sm-6">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Selamat Datang {{ session('nama')}} (<i class="fa fa-user"></i>  @if (session('role_id') == 1)
                    Admin)
                    @else
                    User)
                @endif</h1>

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
                            @if ($prof != null && $prof->foto_profil != null)
                            <a href="{{asset('images/'.$prof->foto_profil)}}" download><img class="rounded-circle mx-auto d-block" style="max-width: 60%;" src="{{asset('images/'.$prof->foto_profil)}}" alt="Card image cap"></a>
                            <h5 class="text-sm-center mt-2 mb-1">{{$prof->nama_lengkap}}</h5>
                            <div class="location text-sm-center"><i class="fa fa-map-marker"></i> {{$prof->alamat}}</div>
                            <div class="location text-sm-center"><i class="fa fa-calendar"></i> {{$prof->tgl_lahir}}</div>
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
                         @if ($prof != null)
                         <div class="row form-group">
                          <div class="col col-md-3"><label class=" form-control-label" style="font-weight: bold">Nama Lengkap</label></div>
                          <div class="col-12 col-md-9">
                            <label class="form-control-label">{{$prof->nama_lengkap}}</label>
                        </div>
                    </div>
                    <div class="row form-group">
                      <div class="col col-md-3"><label class=" form-control-label"style="font-weight: bold">Jenis Kelamin</label></div>
                      <div class="col-12 col-md-9">
                        <label class="form-control-label">{{$prof->gender}}</label>
                    </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3"><label class=" form-control-label"style="font-weight: bold">Tanggal Lahir</label></div>
                  <div class="col-12 col-md-9">
                    <label class="form-control-label">{{$prof->tgl_lahir}}</label>
                </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-3"><label class=" form-control-label"style="font-weight: bold">Alamat</label></div>
              <div class="col-12 col-md-9">
                <label class="form-control-label">{{$prof->alamat}}</label>
            </div>
        </div>
        <div class="row form-group">
          <div class="col col-md-3"><label class=" form-control-label"style="font-weight: bold">Portofolio</label></div>
          <div class="col-12 col-md-9">
            <label class="form-control-label">{{$prof->portofolio}}</label>
        </div>
    </div>
    <div class="row form-group">
      <div class="col col-md-3"><label class=" form-control-label"style="font-weight: bold">Pekerjaan</label></div>
      <div class="col-12 col-md-9">
        <label class="form-control-label">{{$prof->pekerjaan}}</label>
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
 @if ($prof == null)
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#staticModal">
    <i class="fa fa-cloud-upload"></i> Import
</button>
 @endif
</div>
</div>
</div><!-- .animated -->
</div>
</div>
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
                <form action="{{ url('profil/import') }}" method="post" enctype="multipart/form-data">
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