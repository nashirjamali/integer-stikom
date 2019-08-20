@extends('dashboard-template')
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Tim</li>
</ol>

<!-- Page Content -->
<div class="card">
    <div class="card-body">
        <div class="row">
            @foreach ($teamku as $y)
            <div class="col-xl-6">
                <h3><b>{{ Auth::user()->name }}</b></h3>
                <h4><small>{{ $y->institution }}</small></h4>
            </div>
            <div class="col-xl-6 mt-3">
                Kategori
                <h5><b>{{ $y->name }}</b></h5>
            </div>
            <div class="col-xl-12 mt-3">
                @if($y->status == "Sudah")
                <div class="alert alert-success">
                    <b>Terverifikasi</b>
                </div>
                @else
                <div class="alert alert-danger">
                    <b>Belum Terverifikasi</b>
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>

@if($pc < 3) <div style="margin-top: 1em;">
    <button class="btn btn-icon btn-sm btn-success" data-toggle="modal" data-target="#tambah-anggota" type="button">
        <i class="fa fa-plus" aria-hidden="true"><span> Tambah Anggota</span></i>
    </button>
    </div>
    @else
    <div class="alert alert-info" role="alert" style="margin-top: 1em;">
    <i class="fa fa-info-circle" aria-hidden="true">   Anggota Team Maximal 3 Orang</i>
    </div>
    @endif

    @if (count($errors) > 0)
    <div class="alert alert-danger" style="margin-top: 1em;">
        Error<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card mt-4">
        <h4 class="card-header">List Anggota</h4>
        <div class="card-body">
            <div class="table-responsive">
                <table id="table_team" class="table table-striped table-bordered second" style="width:100%">
                    <thead>
                        <tr style="text-align: center">
                            <th>Kartu Identitas</th>
                            <th style="width: 200px;">Nama</th>
                            <th>Email</th>
                            <th>No. Telepon</th>
                            <th>Status</th>
                            <th style="width: 150px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($participants as $x)
                        <tr style="text-align: center">
                            <td><img src="{{ asset('uploads/identity_card/'.$x->identity_card) }}" style="width:35%;" alt="identitiy_card"></td>
                            <td>{{ $x->name }}</td>
                            <td>{{ $x->email }}</td>
                            <td>{{ $x->phone }}</td>
                            <td>{{ $x->status }}</td>
                            <td>
                                @if( $x->status=="Ketua" )
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#update-peserta{{ $x->id }}" style="float: left;">
                                    <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                </button>
                                @else
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#update-peserta{{ $x->id }}" style="float: left; margin-right: 1em;">
                                    <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                </button>
                                <form action="{{ route('team.participants.destroy', $x->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')" style="float: left;"><span class="btn-inner--icon"><i class="fas fa-trash"></i></span></button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- modal insert peserta -->
    <div class="modal fade" id="tambah-anggota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" name="list_anggota" enctype="multipart/form-data" action="{{ route('team.participants.store')}}">
                        {{csrf_field()}}
                        <input type="hidden" value="{{ (Auth::user()->team_id) }}" name="team">
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                                </div>
                                <input class="form-control" placeholder="Kartu Identitas" name="identity_card" type="file" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nama Lengkap" type="text" name="name" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-birthday-cake"></i></span>
                                </div>
                                <input class="form-control" placeholder="Tanggal Lahir" type="date" name="birth_date" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope-open"></i></span>
                                </div>
                                <input class="form-control" placeholder="Email" type="email" name="email" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-phone-square"></i></span>
                                </div>
                                <input class="form-control" placeholder="Phone" type="number" name="phone" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal insert peserta -->


    @foreach ($participants as $x)
    <!-- modal update peserta -->
    <div class="modal fade" id="update-peserta{{ $x->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" name="list_anggota" enctype="multipart/form-data" action="{{ route('team.participants.update',[$x->id])}}">
                        {{csrf_field()}}
                        {{ method_field('PUT')}}
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                                </div>
                                <input class="form-control" type="hidden" name="id">
                                <input class="form-control" placeholder="Kartu Identitas" name="identity_card" type="file" value="{{ $x->identity_card }}" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nama Lengkap" type="text" name="name" value="{{ $x->name }}" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-birthday-cake"></i></span>
                                </div>
                                <input class="form-control" placeholder="Tanggal Lahir" type="date" name="birth_date" value="{{ $x->birth_date }}" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope-open"></i></span>
                                </div>
                                <input class="form-control" placeholder="Email" type="email" name="email" value="{{ $x->email }}" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-phone-square"></i></span>
                                </div>
                                <input class="form-control" placeholder="Phone" type="number" name="phone" value="{{ $x->phone }}" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal update peserta -->
    @endforeach




    @stop