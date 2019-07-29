<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Integer</title>
  @include('admin.includes._script-head')
</head>

<body>
  <!-- sidebar -->
  @include('admin.includes._sidebar')
  <!-- end sidebar -->
  <div class="main-content">
    <!-- navbar -->
    @include('admin.includes._navbar')
    <!-- end navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Content -->
          @yield('content-head')
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      @yield('content-body')
      @include('admin.includes._footer')
    </div>
  </div>
</body>
@include('admin.includes._script-foot')

</html>