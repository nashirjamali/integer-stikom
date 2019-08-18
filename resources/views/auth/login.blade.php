@extends('template')
@section('content')
<header id="pendaftaran" class="header" style="margin-top: -5%">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Login</h2>
                    <p>Silahkan login untuk melanjutkan proses berikutnya</p>
                </div>
                <div class="col-lg-4 offset-lg-4">
                    <div class="competition-card p-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="" class="text-bold">Username</label>
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                            </div>
                            <div class="form-group">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="" class="text-bold">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                            <button class="btn-solid-reg btn-block">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="slider-1" style="margin-top: -5%;">
</div>
@stop