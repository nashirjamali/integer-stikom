@extends('team.layouts')

@section('content-head')
<div class="card col-md-12">
    <div class="card-header" style="padding-bottom:1px;"> 
        <h5 class="card-title" style="margin-bottom:1px;">Nama Team</h5>
    </div>
    <div class="card-body" style="padding-bottom:1em;">
        <h3 class="card-subtitle mb-2">Stikom-DEV</h3>
        <h4 class="card-subtitle mb-2 text-muted">Institut Bisnis dan Informatika Stikom Surabaya</h4>
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
                                <th>Tanggal Lahir</th>
                                <th>Email</th>
                                <th>No. Telepon</th>
                                <th>T-Shirt</th>
                                <th>Vegetarian</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection