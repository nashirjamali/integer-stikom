@extends('team.layouts')

@section('content-head')
@if ( isset($done->id) ) 
                <div class="alert alert-success">
                    <strong>Success!</strong> Bukti Pembayaran telah terupload 
                </div>  
            @endif 
@endsection

@section('content-body')
<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Payments</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
            @if(!isset($done->id))
            <form action="{{ route('team.payments.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="pembayaran">Upload Bukti Pembayaran</label>
                                <input type="file" class="form-control-file" name="evidence" id="">
                                
                            </div>
                            <div class="form-group">
                                <textarea class="form-control form-control-alternative" rows="3" name="description" placeholder="Keterangan"></textarea>
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            @endif
            <div class="card-body">

            @foreach ($payment as $pay)
            
            @endforeach

            

                
            
                <div class="table-responsive">
                    <table id="list_anggota" class="table table-striped table-bordered second" style="width:100%">
                        <thead>
                            <tr>
                                <th>Bukti</th>
                                <th>Status Pembayaran</th>
                                <th>Waktu Submit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payment as $pay)
                                <tr>
                                    <td>{{ $pay->evidence }}</td>
                                    <td>  
                                    @if($pay->team->status == 'belum')
                                        <a class="btn btn-danger btn-sm" href="{{route('admin.admin-payment.edit',[$pay->id])}}">Pending</a>
                                    @elseif($pay->team->status == 'Sudah')
                                        <a class="btn btn-success btn-sm" href="{{route('admin.admin-payment.edit',[$pay->id])}}">Success</a>
                                          
                                    @endif
                                    </td>
                                    <td>{{ $pay->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

                
            </div>
        </div>
    </div>
</div>
@endsection