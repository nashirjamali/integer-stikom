@extends('dashboard-template')
@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Pembayaran</li>
</ol>


<div class="alert alert-secondary" role="alert">
    <h4 class="alert-heading">HI, {{Auth::user()->name}}</h4>
    <p>Silahkan melakukan pembayaran pendaftaran ke :</p>
    <hr>
    <h5 class="alert-heading">
        Jenis Bank : Mandiri <br>
        No. Rekening : 141-00-1778933 a.n Ayu Bhuana <br>
        Nominal : Rp 150,000
    </h5>
    <hr>
    <h4 class="alert-heading mb-0">INGAT! Nominal harus sesuai dengan yang disebutkan diatas. Jika tidak, maka data tidak akan diproses.</h4>
    <p class="mb-0">
        Setelah melakukan pembayaran, upload bukti pembayaran dan mohon menunggu verifikasi oleh panitia INTEGER maksimal 2 x 24 jam.
        <br> Contact Person : Imam Mahudi - <span><a href="https://wa.me/6285748966083">085748966083 (WA)</a></span>
    </p>
</div>


<div class="card">
    <div class="card-body">
        @if(!isset($payment->id))
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

        @if(isset($payment))
        <div class="row">
            <div class="col-4">
                <b>Bukti</b><br><br>
                <img src="/uploads/payment/{{ $payment->evidence }}" alt="" srcset="" width="100%">
            </div>
            <div class="col-4">
                <b>Status Pembayaran</b><br><br>
                @if($payment->team->status == 'Belum Terverifikasi')
                <button type="button" class="btn btn-danger btn-sm">Pending</button>
                @elseif($payment->team->status == 'Sudah')
                <button type="button" class="btn btn-success btn-sm">Success</button>
                @endif
            </div>
            <div class="col-4">
                <b>Waktu Submit</b><br><br>
                {{ $payment->created_at }}
            </div>
        </div>
        @endif

    </div>
</div>

@stop