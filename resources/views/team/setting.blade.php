@extends('team.layouts')

@section('content-head')
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
@endsection

@section('content-body')
<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Setting</h3>
                    </div>
                </div>
            </div>
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
    </div>
</div>
@endsection