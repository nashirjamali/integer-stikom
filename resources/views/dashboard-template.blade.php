<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="RND Integer">


    <link rel="shortcut icon" href="{{ asset('images/favicon.jpg') }}">

    <title>Integer Stikom 2019</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor-2/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{asset('vendor-2/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <a class="navbar-brand mr-1" href="/"><img src="{{ asset('images\logo.png') }}"></a>
        <!-- Navbar -->
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0 ml-5" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="d-none d-md-inline-block navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <b><span>hai, {{ Auth::user()->name }}</span></b>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"> <i class="fa fa-power-off" aria-hidden="true"></i>
                        {{ __('   Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <!-- navbar -->

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">

            @if(\Request::is('team*'))
            @include('team.new.sidebar')
            @elseif(\Request::is('admin*'))
            @include('admin.new.sidebar')
            @endif
        </ul>

        <div id="content-wrapper">

            <div class="container-fluid" style="margin-bottom: 1em;">

                @yield('content')

            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy Reach and Developer Integer Stikom 2019</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor-2/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor-2/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor-2/jquery-easing/jquery.easing.min.js')}} "></script>
    <script src="{{ asset('vendor-2/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor-2/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin.min.js')}}"></script>

    <!-- dataTables -->
    <script>
        $(document).ready(function() {
            $('#table_team').DataTable();
        });
    </script>

</body>

</html>