@extends('dashboard-template')
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Upload Video</li>
</ol>


@if(isset($done->id))
<div class="alert alert-success">
    <strong>Sukses!</strong> Terimakasih atas partisipasi anda.
</div>
@endif

@if(isset($submission_team_before->status))
@if($submission_team_before->status == "On Progress")
<div class="alert alert-primary" role="alert">
    <h4 class="alert-heading">HI, {{Auth::user()->name}}</h4>
    <p>Silahkan menunggu hasil pengumuman dari pengumpulan proposal, sebelum bisa mengupload link video:)</p>
</div>
@elseif($submission_team_before->status == "Tidak Lolos")
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">HI, {{Auth::user()->name}}</h4>
    <p>Maaf silahkan coba tahun depan lagi</p>
</div>
@elseif($submission_team_before->status == "Lolos")
@if($submission_team == null)
<button class="btn btn-icon btn-3 btn-success" data-toggle="modal" data-target="#video" type="button">
    <i class="fa fa-plus" aria-hidden="true"> Upload Link Video</i>
</button>
@endif
<div class="card mt-3">
    <div class="card-body">
        @if (\Session::has('error'))
        <div class="alert alert-danger">
            <ul>
                <li>{!! \Session::get('error') !!}</li>
            </ul>
        </div>
        @endif

        @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
        @endif

        <div class="row">
            <div class="col-xl-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $id }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@endif
@else
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">HI, {{Auth::user()->name}}</h4>
    <p>Silahkan mengupload submission sebelumnya, sebelum melakukan upload link video</p>
</div>
@endif


<!-- modal upload video-->
<div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Link Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('team.video.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Link Video</label>
                        <input type="text" class="form-control" name="link">
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
<!-- modal upload video-->

@stop