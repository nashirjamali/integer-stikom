@extends('dashboard-template')
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Setting</li>
</ol>

@if ($message = Session::get('gagal'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('sukses'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

<div class="card">
    <div class="card-body">
        <form action="{{ route('team.setting.store')}}" method="POST">
            {{csrf_field()}}
            {{ method_field('PUT')}}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Password lama</label>
                        <input type="password" name="password_lama" id="password" class="form-control form-control-alternative" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Password Baru</label>
                        <input type="password" name="password" id="password" class="form-control form-control-alternative" placeholder="Password" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@stop