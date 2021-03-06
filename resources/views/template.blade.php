<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Integer Universitas Dinamika 2019</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('css/timeline.css')}}" rel="stylesheet" />
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">

    @stack('custom-css')

</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <div class="container">
            <!-- Image Logo -->
            <a class="navbar-brand" href="/"><img src="images/logo.png" alt="Integer"></a>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll {{ request()->is('#header') ? 'active' : '' }} " href="/#header">BERANDA<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll {{ request()->is('#lomba') ? 'active' : '' }}" href="/#lomba">LOMBA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll {{ request()->is('#jadwal') ? 'active' : '' }}" href="/#jadwal">JADWAL</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            @if(Auth::user()->role == "team")
                                <li class="nav-item">
                                    <a class="nav-link page-scroll {{ request()->is('#pendaftaran') ? 'active' : '' }}" href="/team">hi {{ Auth::user()->name }}</a>
                                </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link page-scroll {{ request()->is('#pendaftaran') ? 'active' : '' }}" href="/admin">hi {{ Auth::user()->name }}</a>
                            </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link page-scroll {{ request()->is('#pendaftaran') ? 'active' : '' }}" href="/#pendaftaran">PENDAFTARAN</a>
                            </li>
                        @endauth
                    @endif
                </ul>
                @if (Route::has('login'))
                    @auth
                        
                    @else
                        <span class="nav-item">
                            <button class="btn">
                                <a class="btn-solid-reg" href="{{ route('login') }}">LOGIN</a>
                            </button>
                        </span>
                    @endauth
                @endif
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    @yield('content')


    <!-- Scripts -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Popper tooltip library for Bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Bootstrap framework -->
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{asset('js/swiper.min.js')}}"></script>
    <!-- Swiper for image and text sliders -->
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <!-- Magnific Popup for lightboxes -->
    <script src="{{asset('js/morphext.min.js')}}"></script>
    <!-- Morphtext rotating text in the header -->
    <script src="{{asset('js/validator.min.js')}}"></script>
    <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{asset('js/timeline.min.js')}}"></script>
    <!-- Timeline.js -->
    <script src="{{asset('js/scripts.js')}}"></script>

    @stack('custom-script')

</body>

</html>