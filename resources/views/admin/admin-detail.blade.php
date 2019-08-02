@extends('admin.layouts')

@section('content-head')
@endsection

@section('content-body')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="padding-bottom:1px;">
                <h5 class="card-title" style="margin-bottom:1px;">Profil Tim</h5>
            </div>
            <div class="card-body" style="padding-bottom:1em;">
                <h3 class="card-subtitle mb-2">Nama Tim</h3>
                <h4 class="card-subtitle mb-2 text-muted">Kategori Lomba</h4>
                <span class="kartu identitas"><img src="../../upload/back_profil_foto/" class="img-thumbnail"></span>
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                            <th>Status</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>Nama</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>Tanggal Lahir</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>Email</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>No. Telepon</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>T-Shirt</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>Vegetarian</th>
                                            <td>-</td>
                                            </tr>
                                    </tbody></table>
                                </div>
                                <span class="kartu identitas"><img src="../../upload/back_profil_foto/" class="img-thumbnail"></span>
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                            <th>Status</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>Nama</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>Tanggal Lahir</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>Email</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>No. Telepon</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>T-Shirt</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>Vegetarian</th>
                                            <td>-</td>
                                            </tr>
                                    </tbody></table>
                                </div>
                                <span class="kartu identitas"><img src="../../upload/back_profil_foto/" class="img-thumbnail"></span>
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tbody>
                                            <tr>
                                            <th>Status</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>Nama</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>Tanggal Lahir</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>Email</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>No. Telepon</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>T-Shirt</th>
                                            <td>-</td>
                                            </tr>
                                            <tr>
                                            <th>Vegetarian</th>
                                            <td>-</td>
                                            </tr>
                                    </tbody></table>
                                </div>
                                <a href="{{URL::to('/admin/list-tim')}}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
@endsection