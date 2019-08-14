@extends('team.layouts')

@section('content-head')
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
@endsection

@section('content-body')
<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Submission {{ Auth::user()->name }} </h3>
                    </div>
                </div>
            </div>
            <div class="col-md-2" style="margin-top:1em;">
                @if($payment->status == "Sudah" && !isset($done->id))
                <button class="btn btn-icon btn-3 btn-success" data-toggle="modal" data-target="#proposal" type="button">
                    <span class="btn-inner--icon"><i class="ni ni-cloud-upload-96"></i></span>
                    <span class="btn-inner--text">Upload Proposal</span>
                </button>
                @endif
            </div>
            <div class="card-body">
                @if($proposal == null)
                <div class="alert alert-warning">
                    Belum ada proposal yang di upload
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
                        <input type="file" class="form-control-file" name="document" id="exampleFormControlFile1">
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
@endsection