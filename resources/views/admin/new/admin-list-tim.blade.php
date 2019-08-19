@extends('dashboard-template')
@section('content')

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">List Team</li>
</ol>


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

@stop