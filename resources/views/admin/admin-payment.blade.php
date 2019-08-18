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
                                <td>{{ $pay->team->name }}</td>
                                <td>{{ $pay->team->institution }}</td>
                                <td>{{ $pay->evidence }}</td>
                                <td>{{ $pay->description }}</td>
                                <td>{{ $pay->team->status }}</td>
                                <td> 
                                @if($pay->team->status == 'Belum Terverifikasi')
                                    <a class="btn btn-primary btn-sm" href="{{route('admin.admin-payment.edit',[$pay->id])}}">Detail</a>
                                @else
                                    <button type="button" class="btn btn-success btn-sm">Success</button> 
                                @endif
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection