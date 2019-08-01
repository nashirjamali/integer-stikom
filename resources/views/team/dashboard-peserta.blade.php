@extends('team.layouts')

@section('content-head')
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header" style="padding-bottom:1px;">
                <h5 class="card-title" style="margin-bottom:1px;">Nama Team</h5>
            </div>
            <div class="card-body" style="padding-bottom:1em;">
                <h3 class="card-subtitle mb-2">Stikom Dev</h3>
                <h4 class="card-subtitle mb-2 text-muted">Stikom Surabaya</h4>
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="padding-bottom:1px;">
                <h5 class="card-title" style="margin-bottom:1px;">Kategori Lomba</h5>
            </div>
            <div class="card-body" style="padding-bottom:1em;">
                <h3 class="card-subtitle mb-2">Software Development</h3>
                <h4 class="card-subtitle mb-2 text-muted">status?</h4>
            </div>
        </div>
    </div>
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
                                <td>{{ $x->identity_card }}</td>
                                <td>{{ $x->name }}</td>
                                <td>{{ $x->email }}</td>
                                <td>{{ $x->phone }}</td>
                                <td>{{ $x->tshirt }}</td>
                                <td>{{ $x->status }}</td>
                                <td>
                                    @if( $x->status=="Ketua" )
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#update-peserta">
                                        <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                                    </button>
                                    @else
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#update-peserta">
                                        <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm">
                                        <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                                    </button>
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

<div class="card" style="margin-top:1em;">
    <div class="card-header" style="padding-bottom:1px;">
        <h5 class="card-title" style="margin-bottom:1px;">Unduh Bukti Registrasi</h5>
    </div>
    <div class="card-body" style="padding-bottom:1em;">
        <button type="button" style="padding: 12px 16px;" class="btn btn-primary"><i class="ni ni-cloud-download-95"></i> Unduh</button>
    </div>
</div>

<!-- modal update peserta -->
<div class="modal fade" id="update-peserta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control" placeholder="Kartu Identitsa" type="file">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input class="form-control" placeholder="Nama Lengkap" type="text">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input class="form-control" placeholder="Tanggal Lahir" type="date">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input class="form-control" placeholder="Email" type="email">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input class="form-control" placeholder="Phone" type="number">
                        </div>
                    </div>
                    <div class="card" style="margin-top:1em;">
                        <div class="card-header" style="padding-bottom:1px">
                            <h5 class="card-title">Vegetarian</h5>
                        </div>
                        <div class="card-body" style="padding-bottom:1px">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-2" class="custom-control-input" id="customRadio5" type="radio">
                                        <label class="custom-control-label" for="customRadio5">Ya</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-2" class="custom-control-input" id="customRadio6" type="radio">
                                        <label class="custom-control-label" for="customRadio6">Tidak</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="margin-top:1em;">
                        <div class="card-header" style="padding-bottom:1px">
                            <h5 class="card-title">T-shirt</h5>
                        </div>
                        <div class="card-body" style="padding-bottom:1px">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-3" class="custom-control-input" id="customRadio7" type="radio">
                                        <label class="custom-control-label" for="customRadio7">Ya</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="custom-control custom-radio mb-3">
                                        <input name="custom-radio-3" class="custom-control-input" id="customRadio8" type="radio">
                                        <label class="custom-control-label" for="customRadio8">Tidak</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-alternative">
                                    <select class="custom-select custom-select-sm">
                                        <option selected>Open this select menu</option>
                                        <option value="1">S</option>
                                        <option value="2">M</option>
                                        <option value="3">L</option>
                                        <option value="3">XL</option>
                                        <option value="3">2XL</option>
                                        <option value="3">3XL</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal update peserta -->
@endsection