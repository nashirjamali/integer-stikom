@extends('dashboard-template')
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Upload Video</li>
</ol>


@if(isset($done->id))
<div class="alert alert-success">
    <strong>Sukses!</strong> Terimakasih atas partisipasi anda. Di tunggu di Universitas Dinamika SURABAYA
</div>
@endif

@if(isset($submission_team_before->status))
@if($submission_team_before->status == "On Progress")
<div class="alert alert-primary" role="alert">
    <h4 class="alert-heading">HI, {{Auth::user()->name}}</h4>
    <p>Silahkan menunggu hasil pengumuman dari pengumpulan proposal, sebelum bisa mengupload link video:)</p>
</div>
@elseif($submission_team_before->status == "Failed")
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">HI, {{Auth::user()->name}}</h4>
    <p>Maaf silahkan coba tahun depan lagi</p>
</div>
@endif
@else
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">HI, {{Auth::user()->name}}</h4>
    <p>Silahkan mengupload submission sebelumnya, sebelum melakukan upload link video</p>
</div>
@endif

@stop