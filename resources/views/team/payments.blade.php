@extends('team.layouts')

@section('content-head')
    @if( isset($done->id) ) 
        <div class="alert alert-success">
            <strong>Sukses!</strong> Bukti Pembayaran telah terupload 
        </div>  
    @endif 

    <div class="alert alert-secondary" role="alert">
        <h4 class="alert-heading">HI, {{Auth::user()->name}}</h4>
        <p>Silahkan melakukan pembayaran pendaftaran ke :</p> <hr>
        <h5 class="alert-heading">
            Jenis Bank : JENIUS <br>
            No. Rekening : 07XXXXX a.n Shofa Nashir Bastian Ayub <br>
            Nominal : Rp 150,000
        </h5>
        <hr>
        <h4 class="alert-heading mb-0">INGAT! Nominal harus sesuai dengan yang disebutkan diatas. Jika tidak, maka data tidak akan diproses.</h4>
        <p class="mb-0">
            Setelah melakukan pembayaran, upload bukti pembayaran dan mohon menunggu verifikasi oleh panitia INTEGER maksimal 2 x 24 jam. 
            Contact Person : Afif Susanto - Apipq (line ID) / 0812312xxxx (WA)
        </p>
    </div>
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
                                        <input type="file" class="form-control-file" name="evidence">
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
                                                @if($pay->team->status == 'Belum Terverifikasi')
                                                    <button type="button" class="btn btn-danger btn-sm">Pending</button>
                                                @elseif($pay->team->status == 'Sudah')
                                                    <button type="button" class="btn btn-success btn-sm">Success</button>
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