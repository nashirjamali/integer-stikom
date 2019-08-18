@extends('team.layouts')

@section('content-head')
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

@endsection

@section('content-body')
    <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Pengumpulan Video</h3>
                        </div>
                    </div>
                </div>
                @if(isset($submission_team_before->status))
                    @if($submission_team_before->status == "Success")
                        <div class="col-md-2" style="margin-top:1em;">
                            <button class="btn btn-icon btn-3 btn-success" data-toggle="modal" data-target="#proposal" type="button">
                                <span class="btn-inner--icon"><i class="ni ni-cloud-upload-96"></i></span>
                                <span class="btn-inner--text">Upload Video</span>
                            </button>
                        </div>
                    @endif
                @endif
                <div class="card-body">
                    <div class="text-danger">Babak 2 belum di mulai</div>
                </div>
            </div>
        </div>
    </div>

    <!-- modal upload video-->
    <div class="modal fade" id="proposal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Upload Link Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('team.video.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <input class="form-control" name="document" type="text" placeholder="Input Link Video" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal upload video-->
@endsection