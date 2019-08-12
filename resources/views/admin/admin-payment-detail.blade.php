@extends('admin.layouts')

@section('content-head')
@endsection

@section('content-body')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="padding-bottom:1px;">
                <h5 class="card-title" style="margin-bottom:1px;">Profil Tim</h5>
            </div>
            <div class="card-body" style="padding-bottom:1em;">
                <h3 class="card-subtitle mb-2">Nama Tim : {{ $pay->team->name }}</h3>
                <h4 class="card-subtitle mb-2 text-muted">Institution : {{ $pay->team->institution }}</h4>
                                <div class="box-body table-responsive no-padding">
                                <form action="{{ route('admin.admin-payment.update',[$pay->team_id]) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT')}}   
                                    <div class="form-group">
                                        <label for="nama">Evidence :</label>
                                        <img width="250px" src="{{ url('uploads/payment/'.$pay->evidence) }}">
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Description :</label>
                                        <input type="text" disabled class="form-control" id="usr" name="evidence" value="{{ $pay->description }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status:</label>
                                        <input type="text" class="form-control" id="status" name="status1" value="{{ $pay->team->status }}">
                                        <input type="text" class="form-control" hidden id="status" name="status" value="Sudah">
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md btn-primary">Approve</button>
                                        <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                                    </div>
                                </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
@endsection