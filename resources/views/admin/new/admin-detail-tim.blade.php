@extends('dashboard-template')
@section('content')

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/admin/list-tim">List Team</a>
    </li>
    <li class="breadcrumb-item active">Detail Tim</li>
</ol>

<div class="card w-75">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-6">
                <h3><b>{{ $team->name }}</b></h3>
                <span>{{ $team->institution }}</span>
            </div>
            <div class="col-xl-6 mt-3">
                Kategori
                <h5><b>{{$team->competitions->name}}</b></h5>
            </div>
        </div>
    </div>
</div>

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
                        <img src="{{ asset('uploads/identity_card/'.$key->identity_card) }}" alt="" srcset="" width="50%">
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
                        <img src="{{ asset('uploads/identity_card/'.$key->identity_card) }}" alt="" srcset="" width="50%">
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="mt-5">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.list-tim.destroy', $team->username) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-lg btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')" style="float: left;"><span class="btn-inner--icon"><i class="fas fa-trash"></i> Hapus Tim</span></button>
            </form>
        </div>
    </div>
</div>


@stop