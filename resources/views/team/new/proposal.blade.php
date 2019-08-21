@extends('dashboard-template')
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Upload Proposal</li>
</ol>


@if(isset($done->id))
<div class="alert alert-success">
    <strong>Sukses!</strong> Terimakasih atas partisipasi anda. Silahkan menunggu pengumuman selanjutnya
</div>
@endif

@if($payment->status == 'Belum Terverifikasi')
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">HI, {{Auth::user()->name}}</h4>
    <p>Silahkan melakukan pembayaran terlebih dahulu dan tunggu approve dari panitia sebelum melakukan upload proposal. terimakasih :)</p>
</div>
@endif


<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-12" style="">
                @if($payment->status == "Sudah" && !isset($done->id))
                <button class="btn btn-icon btn-3 btn-success" data-toggle="modal" data-target="#proposal" type="button">
                    <i class="fa fa-plus" aria-hidden="true"> Upload Proposal</i>
                </button>
                @endif
            </div>
            <div class="col-xl-12" style="margin-top: 1em;">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    Upload Validation Error<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if($proposal == null)
                <div class="alert alert-danger" role="alert" style="margin-top: 1em;">
                <i class="fa fa-exclamation-triangle" aria-hidden="true">   Belum ada proposal yang diupload</i>
                </div>
                @else
                <div class="row">
                    <div class="col-6">
                        <b>Proposal</b><br><br>
                        <a href="{{ asset('uploads/proposal/'.$proposal->document) }}">{{ $proposal->document }}</a>
                    </div>
                    <div class="col-6">
                        <b>Waktu Submit</b><br><br>
                        {{ $proposal->updated_at }}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- modal upload proposal-->
<div class="modal fade" id="proposal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Proposal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('team.submission.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="document">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal upload proposal-->

@stop