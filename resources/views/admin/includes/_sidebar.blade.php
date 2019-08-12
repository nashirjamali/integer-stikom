<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
  <div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand pt-0" href="./index.html">
      <img src="{{ asset('/assets/argon/img/brand/integer-1.png') }}" class="navbar-brand-img" alt="...">
    </a>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
      <!-- Navigation -->
      <ul class="navbar-nav">
        <li class="nav-item" class="" active>
          <a class=" nav-link active {{ request()->is('team') ? 'active' : '' }}" href="{{URL::to('/admin')}}"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('admin/dashboard-admin') ? 'active' : '' }}" href="{{URL::to('/admin/list-tim')}}">
            <i class="ni ni-book-bookmark text-red"></i> List Tim
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('admin/admin-submission') ? 'active' : '' }}" href="{{URL::to('/admin/admin-submission')}}">
            <i class="ni ni-folder-17 text-green"></i> Submission
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('admin/admin-payment') ? 'active' : '' }}" href="{{URL::to('/admin/admin-payment')}}">
            <i class="ni ni-folder-17 text-green"></i> Payment
          </a>
        </li>
      </ul>
      <!-- Divider -->
      <hr class="my-3">
    </div>
  </div>
</nav>