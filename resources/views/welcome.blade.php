@extends('template')
@section('content')
<!-- Header -->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2>INTEGER STIKOM 2019</h2>
                    <h2 id="js-rotating">UI UX DESIGN, SOFTWARE DEVELOPMENT</h2>
                    <h2>COMPETITION</h2>
                    <div class="mt-5">
                        <a class="btn-light-lg page-scroll mr-2 mb-2" href="#about">SELENGKAPNYA</a>
                        <a class="btn-solid-lg page-scroll" href="#pendaftaran">DAFTAR SEKARANG</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="image-container">
                        <img src="images/logo-lg.png" class="img-fluid" alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end of header -->

<div class="slider-1" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h3>Tentang Integer Stikom 2019</h3>
                    <img src="images/line.svg" alt="" srcset="">
                    <div class="mt-3">
                        <p>
                            Institut Bisnis dan Informatika Stikom Surabaya merupakan sebuah instansi yang mendukung
                            perkembangan teknologi informasi khususnya di Surabaya, dan di Indonesia pada umumnya.
                            Sebagai bentuk perwujudan tersebut, Senat Mahasiswa Institut Bisnis dan Informatika
                            Stikom Surabaya mengadakan sebuah lomba yang dapat menghasilkan sebuah solusi terhadap
                            permasalahan yang ada pada pelayanan publik di Indonesia, sehingga dapat mengurangi
                            keterlambatan perkembangan yang ada. <br><br> Lomba ini membidik generasi SMA/SMK/MA dan
                            Mahasiswa/i se-Jawa Timur untuk berpartisipasi dalam lomba yang kami adakan. Lomba
                            dengan tema “Mensejahterahkan Masyarakat dengan TI”. Lomba ini diharapkan dapat
                            memberikan solusi
                            atas pelayanan masyarakat di Indonesia serta dapat menyalurkan bakat dan minat dari para
                            peserta di bidang teknologi informasi. Harapan kami agar dapat memberikan kontribusi
                            untuk dunia pendidikan di Indonesia.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="mt-5">
                    <h3>Pendaftaran Akan Segera Dibuka</h3>
                    <div class="mt-5">
                        <div class="row w-75 m-auto">
                            <div class="col-3">
                                <h1 id="day">30</h1>
                                <p class="text-solid"><b>HARI</b></p>
                            </div>
                            <div class="col-3">
                                <h1 id="hour">30</h1>
                                <p class="text-solid"><b>JAM</b></p>
                            </div>
                            <div class="col-3">
                                <h1 id="minute">30</h1>
                                <p class="text-solid"><b>MENIT</b></p>
                            </div>
                            <div class="col-3">
                                <h1 id="second">30</h1>
                                <p class="text-solid"><b>DETIK</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="slider-2" id="lomba">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-8 offset-lg-2">
                <h3 class="text-dark">Kategori Lomba</h3>
                <img src="images/line.svg" alt="" srcset="">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="competition-card">
                            <div class="card-img" style="background-image: url('images/sdc.jpg')">
                            </div>
                            <article class="text-center">
                                <h5 class="text-solid">Software Development <br> Competition</h5>
                                <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat
                                </p>
                                <a href="" class="btn-solid-reg">Selengkapnya</a>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="competition-card">
                            <div class="card-img" style="background-image: url('images/uiux.jpg')">
                            </div>
                            <article class="text-center">
                                <h5 class="text-solid">UI UX Design <br> Competition</h5>
                                <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat
                                </p>
                                <a href="" class="btn-solid-reg">Selengkapnya</a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="slider-1" id="jadwal">
    <div class="container">
        <div class="text-center">
            <h3>Jadwal Perlombaan</h3>
            <img src="images/line.svg" alt="" srcset="">
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="timeline">
                    <div class="timeline__wrap">
                        <div class="timeline__items">
                            <div class="timeline__item">
                                <div class="timeline__content">
                                    <h2 class="text-dark">5 Februari 2019</h2>
                                    <p class="text-solid">Tahun Baru Imlek</p>
                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content">
                                    <h2 class="text-dark">7 Maret 2019</h2>
                                    <p class="text-solid">Hari Raya Nyepi</p>
                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content">
                                    <h2 class="text-dark">5 Juni 2019</h2>
                                    <p class="text-solid">Hari Raya Idul Fitri</p>
                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content">
                                    <h2 class="text-dark">17 Agustus 2019</h2>
                                    <p class="text-solid">Kemerdekaan Indonesia</p>
                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content">
                                    <h2 class="text-dark">25 Desember 2019</h2>
                                    <p class="text-solid">Hari Raya Natal</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="slider-2" id="pendaftaran">
    <div class="container">
            @if (Route::has('login'))
                @auth
                    
                @else
                    <div class="text-center">
                        <h3 class="text-dark">Pendaftaran Tim</h3>
                        <img src="images/line.svg" alt="" srcset="">
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 col-lg-8 offset-lg-2">
                            @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first()}}
                            </div>
                            @endif
                            <div class="card" style="background-color: #001E36; padding: 1rem">
                                <div class="card-body">
                                    <form action="{{ route('register-team') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Nama Tim</label>
                                                    <input id="name" type="text" class="form-control-input" name="name" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Institusi</label>
                                                    <input type="text" class="form-control-input" name="institution" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Kategori Lomba</label>
                                                    <select class="form-control-select" name="competition_id">
                                                        @foreach($competitions as $key)
                                                        <option value="{{ $key->id }}">{{ $key->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Username (Terisi Otomatis)</label>
                                                    <input type="text" class="form-control-input username" disabled>
                                                    <input type="text" class="username" hidden name="username">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control-input" name="password" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-4">
                                                <div class="form-group">
                                                    <button type="submit" class="form-control-submit-button">DAFTAR</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endauth
            @endif
    </div>
</div>
<div class="basic-1" id="kontak">
    <div class="container text-center">
        <h3>Kontak</h3>
        <img src="images/line.svg" alt="" srcset="">
        <div class="row mt-5">
            <div class="col-lg-8 offset-lg-2">
                <h4>Kontak Personal</h4>
                <p><b><a href="https://wa.me/6285748966083" target="_blank">Imam Mahudi +62-857-4896-6083</a></b>
                </p>
            </div>
            <div class="col-lg-8 offset-lg-2 mt-5">
                <h4>Instagram</h4>
                <a href="https://www.instagram.com/integer.stikomsby/" target="_blank">@integer.stikomsby</a>
            </div>
            <div class="col-lg-8 offset-lg-2 mt-5">
                <h4>Alamat</h4>
                <p><b>Institut Bisnis dan Informatika Stikom Surabaya</b></p>
                <a target="_blank" href="https://goo.gl/maps/ByTA7yALdJB1X5Qq9"><b>Raya Kedung Baruk No.98, Kedung
                        Baruk </b><br> Kec. Rungkut, Kota Surabaya, Jawa Timur <br> 60298</a>
            </div>
        </div>
    </div>
    @stop

    @push('custom-script')
    <script>
        $(document).ready(function() {
            $('#name').keyup(function() {
                var name = $(this).val()
                var array = name.split(" ");
                var username = ""
                for (let i = 0; i < array.length; i++) {
                    username += array[i]
                }

                $('.username').val(username.toLowerCase())
            })
        })
    </script>
    @endpush