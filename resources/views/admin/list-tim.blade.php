@extends('admin.layouts')

@section('content-body')
<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">List Tim</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="list_anggota" class="table table-striped table-bordered second" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama Tim</th>
                                <th>Institusi</th>
                                <th>Kategori Lomba</th>
                                <th>Status Bayar</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teams as $key)
                            <tr>
                                <td>{{ $key->name }}</td>
                                <td>{{ $key->institution }}</td>
                                <td>{{ $key->competitions->name }}</td>
                                <td>{{ $key->status }}</td>
                                <td>
                                <a class="btn btn-primary btn-sm" href="/admin/list-tim/{{ $key->username }}">Detail</a>
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


@endsection