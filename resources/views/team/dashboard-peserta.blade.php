@extends('team.layouts')

@section('content-head')
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            @foreach ($teamku as $y)
            <div class="card-header" style="padding-bottom:1px;">
                <h5 class="card-title" style="margin-bottom:1px;">Nama Team</h5>
            </div>
            <div class="card-body" style="padding-bottom:1em;">
                <h3 class="card-subtitle mb-2">{{ $y->name }}</h3>
                <h4 class="card-subtitle mb-2 text-muted">{{ $y->institution }}</h4>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="padding-bottom:1px;">
                <h5 class="card-title" style="margin-bottom:1px;">Kategori Lomba</h5>
            </div>
            <div class="card-body" style="padding-bottom:1em;">
                <h3 class="card-subtitle mb-2">{{ $y->name }}</h3>
                <h4 class="card-subtitle mb-2 text-muted">
                    @if($y->status == "Sudah")
                        Terverifikasi
                    @else
                        Belum Terverifikasi
                    @endif
                </h4>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

@section('content-body')
<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">List Anggota</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="list_anggota" class="table table-striped table-bordered second" style="width:100%">
                        <thead>
                            <tr>
                                <th>Kartu Identitas</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No. Telepon</th>
                                <th>T-Shirt</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($participants as $x)
                            <tr>
                                <td><img src="{{ url('./uploads/file/'.$x->identity_card) }}" style="width:50%;" alt="identitiy_card"></td>
                                <td>{{ $x->name }}</td>
                                <td>{{ $x->email }}</td>
                                <td>{{ $x->phone }}</td>
                                <td>{{ $x->tshirt }}</td>
                                <td>{{ $x->status }}</td>
                                <td>
                                    @if( $x->status=="Ketua" )
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#update-peserta{{ $x->id }}">
                                        <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                                    </button>
                                    @else
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#update-peserta{{ $x->id }}">
                                        <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                                    </button>
                                    <form action="{{ route('team.participants.destroy', $x->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}  
                                         <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span></button>
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
    </div>
</div>
@foreach ($participants as $x)
<!-- modal update peserta -->
<div class="modal fade" id="update-peserta{{ $x->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
                                <span class="input-group-text"><i class="ni ni-image"></i></span>
                            </div>
                            <input class="form-control" type="hidden" name="id">
                            <input class="form-control" placeholder="Kartu Identitas" name="identity_card" type="file" value="{{ url('./uploads/file/'.$x->identity_card) }}" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                            </div>
                            <input class="form-control" placeholder="Nama Lengkap" type="text" name="name" value="{{ $x->name }}">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                            </div>
                            <input class="form-control" placeholder="Tanggal Lahir" type="date" name="birth_date" value="{{ $x->birth_date }}">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input class="form-control" placeholder="Email" type="email" name="email" value="{{ $x->email }}">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-tablet-button"></i></span>
                            </div>
                            <input class="form-control" placeholder="Phone" type="number" name="phone" value="{{ $x->phone }}">
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

@endsection