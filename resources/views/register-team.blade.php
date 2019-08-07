@extends('template')
@section('content')
<header id="pendaftaran" class="header" style="margin-top: -5%; height: 80rem;">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Hai, <span class="text-solid">{{ $name }}</span></h2>
                    <h5>Silahkan lengkapi data diri ketua dan anggota <br>
                        untuk melanjutkan ke proses selanjutnya</h5>
                </div>
                <div class="col-lg-8 m-auto">
                    <!-- multistep form -->
                    <form id="msform" action="{{ route('store') }}" method="POST">
                        @csrf
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active">Ketua Tim</li>
                            <li>Anggota 1</li>
                            <li>Anggota 2</li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset class="text-left pt-5">
                            <h2 class="fs-title">Data diri ketua</h2>
                            <!-- Nama Ketua -->
                            <div class="text-dark mt-4">
                                <label class="text-bold" for="">Nama *</label>
                                <input type="text" class="form-control" name="name_1" required>
                            </div>

                            <!-- Tanggal Lahir -->
                            <div class="text-dark w-75">
                                <label class="text-bold" for="">Tanggal Lahir *</label>
                                <input type="date" class="form-control-date" name="birth_date_1" required>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Email -->
                                    <div class="text-dark">
                                        <label class="text-bold" for="">Email *</label>
                                        <input type="Email" class="form-control" name="email_1" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!-- Telepon -->
                                    <div class="text-dark">
                                        <label class="text-bold" for="">Telepon *</label>
                                        <input type="number" class="form-control" name="phone_1" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Kartu Identitas -->
                            <div class="text-dark w-75">
                                <label class="text-bold" for="">Kartu Identitas *</label>
                                <input type="file" class="form-control-date" name="identity_card_1" required>
                            </div>

                            <input type="button" name="next" class="next action-button" value="Lanjut" />
                        </fieldset>



                        <fieldset class="text-left pt-5">
                            <h2 class="fs-title">Data diri anggota 1</h2>
                            <!-- Nama Ketua -->
                            <div class="text-dark mt-4">
                                <label class="text-bold" for="">Nama *</label>
                                <input type="text" class="form-control" name="name_2" required>
                            </div>

                            <!-- Tanggal Lahir -->
                            <div class="text-dark w-75">
                                <label class="text-bold" for="">Tanggal Lahir *</label>
                                <input type="date" class="form-control-date" name="birth_date_2" required>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Email -->
                                    <div class="text-dark">
                                        <label class="text-bold" for="">Email *</label>
                                        <input type="Email" class="form-control" name="email_2" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!-- Telepon -->
                                    <div class="text-dark">
                                        <label class="text-bold" for="">Telepon *</label>
                                        <input type="number" class="form-control" name="phone_2" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Kartu Identitas -->
                            <div class="text-dark w-75">
                                <label class="text-bold" for="">Kartu Identitas *</label>
                                <input type="file" class="form-control-date" name="identity_card_2" required>
                            </div>

                            <input type="button" name="previous" class="previous action-button" value="Kembali" />
                            <input type="button" name="next" class="next action-button" value="Lanjut" />
                        </fieldset>




                        <fieldset class="text-left pt-5">
                            <h2 class="fs-title">Data diri anggota 2 (Optional)</h2>
                            <!-- Nama Ketua -->
                            <div class="text-dark mt-4">
                                <label class="text-bold" for="">Nama</label>
                                <input type="text" class="form-control" name="name_3">
                            </div>

                            <!-- Tanggal Lahir -->
                            <div class="text-dark w-75">
                                <label class="text-bold" for="">Tanggal Lahir</label>
                                <input type="date" class="form-control-date" name="birth_date_3">
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <!-- Email -->
                                    <div class="text-dark">
                                        <label class="text-bold" for="">Email</label>
                                        <input type="Email" class="form-control" name="email_3">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!-- Telepon -->
                                    <div class="text-dark">
                                        <label class="text-bold" for="">Telepon</label>
                                        <input type="number" class="form-control" name="phone_3">
                                    </div>
                                </div>
                            </div>

                            <!-- Kartu Identitas -->
                            <div class="text-dark w-75">
                                <label class="text-bold" for="">Kartu Identitas</label>
                                <input type="file" class="form-control-date" name="identity_card_3">
                            </div>


                            <input type="hidden" value="{{ $institution }}" name="institution">
                            <input type="hidden" value="{{ $competition_id }}" name="competition_id">
                            <input type="hidden" value="{{ $password }}" name="password">
                            <input type="hidden" value="{{ $name }}" name="name_team">
                            <input type="hidden" value="{{ $username }}" name="username">

                            <input type="button" name="previous" class="previous action-button" value="Kembali" />
                            <input type="submit" name="next" class="next action-button" value="Daftar" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="slider-1" style="margin-top: -5%;">
</div>
@stop