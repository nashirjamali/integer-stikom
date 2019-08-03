
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
                        <a class="btn-light-lg page-scroll mr-2 mb-2" href="">SELENGKAPNYA</a>
                        <a class="btn-solid-lg page-scroll" href="">DAFTAR SEKARANG</a>
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
                            Institut Bisnis dan Informatika Stikom Surabaya merupakan sebuah instansi yang mendukung perkembangan teknologi informasi khususnya di Surabaya, dan di Indonesia pada umumnya. Sebagai bentuk perwujudan tersebut, Senat Mahasiswa Institut Bisnis dan Informatika
                            Stikom Surabaya mengadakan sebuah lomba yang dapat menghasilkan sebuah solusi terhadap permasalahan yang ada pada pelayanan publik di Indonesia, sehingga dapat mengurangi keterlambatan perkembangan yang ada. <br><br> Lomba ini membidik generasi SMA/SMK/MA dan Mahasiswa/i se-Jawa Timur untuk berpartisipasi dalam lomba yang kami adakan. Lomba dengan tema “Mensejahterahkan Masyarakat dengan TI”. Lomba ini diharapkan dapat memberikan solusi
                            atas pelayanan masyarakat di Indonesia serta dapat menyalurkan bakat dan minat dari para peserta di bidang teknologi informasi. Harapan kami agar dapat memberikan kontribusi untuk dunia pendidikan di Indonesia.
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

<div class="slider-2">
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
                                <h5 class="text-solid">Software Development Competition</h5>
                                <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat
                                </p>
                                <button class="btn">
                                    <a class="btn-solid-reg" href="">SELENGKAPNYA</a>
                                </button>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="competition-card">
                            <div class="card-img" style="background-image: url('images/uiux.jpg')">
                            </div>
                            <article class="text-center">
                                <h5 class="text-solid">Software Development Competition</h5>
                                <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat
                                </p>
                                <button class="btn">
                                    <a class="btn-solid-reg" href="">SELENGKAPNYA</a>
                                </button>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Daftar -->
<div class="slider-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form action="{{ route('registerteam') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Nama Tim</label>
                        <input name="name" type="text" class="form-control" required id="team-name">
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label>Institusi</label>
                        <input name="institution" type="text" class="form-control" required>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label>Kategori Lomba</label>
                        <select name="competition_id" id="" class="form-control">
                            @foreach($competitions as $key)
                            <option value="{{ $key->id }}">{{ $key->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" disabled id="username">
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control">
                        <div class="help-block with-errors"></div>
                    </div>

                    <button type="submit" class="btn-solid-lg mt-4" style="width: 100%; text-align:center">DAFTAR</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@push('custom-script')
<script>
    $(document).ready(function() {
        $('#team-name').keyup(function() {
            var name = $(this).val()
            var array = name.split(" ");
            var username = ""
            for (let i = 0; i < array.length; i++) {
                username += array[i]
            }

            $('#username').val(username.toLowerCase())
        })
    })
</script>
@endpush