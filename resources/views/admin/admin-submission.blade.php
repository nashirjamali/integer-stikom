@extends('admin.layouts')

@section('content-head')
<div class="row">
    <div class="col-sm-6">
        <h1 class="text-light">Submission Lomba</h1>
    </div>
</div>
@endsection

@section('content-body')
<div class="row">
    @foreach($competitions as $key)
    <div class="col-xl-6 col-md-12 col-sm-12">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">{{ $key->name }}</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p>Klik detail untuk lihat submission</p>
                <a href="/admin/submission/{{ $key->id }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection