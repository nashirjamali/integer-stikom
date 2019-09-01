@extends('dashboard-template')
@section('content')

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Pembayaran</li>
</ol>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="list_anggota" class="table table-striped table-bordered second" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama Tim</th>
                        <th>Institution</th>
                        <th>Evidence</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                @foreach ($payment as $pay)
                <tbody>
                    <tr>
                        <td>
                            @if(isset($pay->team->name))
                            {{ $pay->team->name }}
                            @endif
                        </td>
                        <td>
                            @if(isset($pay->team->institution))
                            {{ $pay->team->institution }}
                            @endif
                        </td>
                        <td>{{ $pay->evidence }}</td>
                        <td>{{ $pay->description }}</td>
                        <td>
                            @if(isset($pay->team->status))
                            {{ $pay->team->status }}</td>
                            @endif
                        <td>
                            @if(isset($pay->team->status))
                                @if($pay->team->status == 'Belum Terverifikasi')
                                <a class="btn btn-primary btn-sm" href="{{route('admin.admin-payment.edit',[$pay->id])}}">Detail</a>
                                @else
                                <button type="button" class="btn btn-success btn-sm">Success</button>
                                @endif
                            @endif
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@stop