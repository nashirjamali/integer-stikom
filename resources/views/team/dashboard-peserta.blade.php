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
                                    <button type="button" class="btn btn-info btn-sm">
                                        <span class="btn-inner--icon"><i class="ni ni-check-bold"></i></span>
                                    </button>
                                    @else
                                    <button type="button" class="btn btn-info btn-sm">
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
@endsection