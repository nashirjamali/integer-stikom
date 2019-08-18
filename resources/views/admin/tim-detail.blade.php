@extends('admin.layouts')

@section('content-head')
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header" style="padding-bottom:1px;">
                <h5 class="card-title" style="margin-bottom:1px;">Profil Tim</h5>
            </div>
            <div class="card-body" style="padding-bottom:1em;">
                <h3 class="card-subtitle mb-2">{{ $team->name }} ( {{ $team->institution }}) </h3>
                <h4 class="card-subtitle mb-2 text-muted">{{$team->competitions->name}}</h4>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content-body')
<div class="row">
    @foreach($participant1 as $key)
    <div class="col-lg-6 mt-2">
        <div class="card">
            <div class="card-header" style="padding-bottom:1px;">
                <h5 class="card-title" style="margin-bottom:1px;">Ketua Tim</h5>
            </div>
            <div class="card-body p-4" style="padding-bottom:1em;">
                <div class="row">
                    <div class="col-lg-4">
                        <h5>Nama</h5>
                    </div>
                    <div class="col-lg-8">
                        : {{ $key->name }}
                    </div>

                    <div class="col-lg-4">
                        <h5>Tanggal Lahir</h5>
                    </div>
                    <div class="col-lg-8">
                        : {{ $key->birth_date }}
                    </div>

                    <div class="col-lg-4">
                        <h5>Email</h5>
                    </div>
                    <div class="col-lg-8">
                        : {{ $key->email }}
                    </div>

                    <div class="col-lg-4">
                        <h5>Kartu Identitas</h5>
                    </div>
                    <div class="col-lg-12">
                        <img src="{{ asset('uploads/file/'.$key->identity_card) }}" alt="" srcset="" width="50%">
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endforeach

    @foreach($participant2 as $key)
    <div class="col-lg-6 mt-2">
        <div class="card">
            <div class="card-header" style="padding-bottom:1px;">
                <h5 class="card-title" style="margin-bottom:1px;">Anggota</h5>
            </div>
            <div class="card-body p-4" style="padding-bottom:1em;">
                <div class="row">
                    <div class="col-lg-4">
                        <h5>Nama</h5>
                    </div>
                    <div class="col-lg-8">
                        : {{ $key->name }}
                    </div>

                    <div class="col-lg-4">
                        <h5>Tanggal Lahir</h5>
                    </div>
                    <div class="col-lg-8">
                        : {{ $key->birth_date }}
                    </div>

                    <div class="col-lg-4">
                        <h5>Email</h5>
                    </div>
                    <div class="col-lg-8">
                        : {{ $key->email }}
                    </div>

                    <div class="col-lg-4">
                        <h5>Kartu Identitas</h5>
                    </div>
                    <div class="col-lg-12">
                        <img src="{{ asset('uploads/file/'.$key->identity_card) }}" alt="" srcset="" width="50%">
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection