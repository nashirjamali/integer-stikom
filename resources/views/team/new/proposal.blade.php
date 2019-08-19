@extends('dashboard-template')
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Upload Proposal</li>
</ol>


@if(isset($done->id))
<div class="alert alert-success">
    <strong>Sukses!</strong> Terimakasih atas partisipasi anda.Silahkan tunggu pengumuman selanjutnya
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
                    <span class="btn-inner--icon"><i class="ni ni-cloud-upload-96"></i></span>
                    <span class="btn-inner--text">Upload Proposal</span>
                </button>
                @endif
            </div>
            <div class="col-xl-12">
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
                <div class="alert alert-warning">
                    Belum ada proposal yang di upload
                </div>
                @else
                <div class="row">
                    <div class="col-6">
                        <b>Proposal</b><br><br>
                        <a href="{{ asset('uploads/submission/'.$proposal->document) }}">{{ $proposal->document }}</a>
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

@stop