@extends('dashboard-template')
@section('content')

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/admin/payment">Pembayaran</a>
    </li>
    <li class="breadcrumb-item active">Detail</li>
</ol>

<div class="card w-75">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-6">
                <h3><b>{{ $pay->team->name }}</b></h3>
                <span>{{ $pay->team->institution }}</span>
            </div>
            <div class="col-xl-6 mt-3">
                Kategori
                <h5><b>{{$pay->team->competitions->name}}</b></h5>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body" style="padding-bottom:1em;">
        <div class="box-body table-responsive no-padding">
            <form action="{{ route('admin.admin-payment.update',[$pay->team_id]) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT')}}
                <div class="form-group">
                    <label for="nama">Evidence :</label>
                    <img width="250px" src="{{ asset('uploads/payment/'.$pay->evidence) }}">

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

@stop