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
          <a class="nav-link {{ request()->is('team') ? 'active' : '' }}" href="{{URL::to('/team')}}">
            <i class="ni ni-tv-2 text-primary"></i> Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('team/payments') ? 'active' : '' }}" href="{{URL::to('/team/payments')}}">
            <i class="ni ni-money-coins text-red"></i> Payment
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('team/submission') ? 'active' : '' }}" href="{{URL::to('/team/submission')}}">
            <i class="ni ni-paper-diploma text-info"></i> Upload Proposal
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('team/video') ? 'active' : '' }}" href="{{URL::to('/team/video')}}">
            <i class="ni ni-button-play text-green"></i> Upload Video
          </a>
        </li>
      </ul>
      <!-- Divider -->
      <hr class="my-3">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('team/setting') ? 'active' : '' }}" href="{{URL::to('/team/setting')}}">
            <i class="ni ni-settings-gear-65 text-black"></i> Setting
          </a>
        </li>
      </ul>
    </div>

  </div>
</nav>