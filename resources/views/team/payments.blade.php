@extends('team.layouts')

@section('content-head')
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
                <form>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="pembayaran">Upload Bukti Pembayaran</label>
                                <input type="file" class="form-control-file" id="pembayaran">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control form-control-alternative" rows="3" placeholder="Keterangan"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection