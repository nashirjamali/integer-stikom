<li class="nav-item {{ request()->is('team') ? 'active' : '' }}">
    <a class="nav-link " href="/team">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
</li>
<li class="nav-item {{ request()->is('team/payments*') ? 'active' : '' }}">
    <a class="nav-link " href="/team/payments">
        <i class="fas fa-fw fa-dollar-sign"></i>
        <span>Pembayaran</span>
    </a>
</li>
<li class="nav-item {{ request()->is('team/submission*') ? 'active' : '' }}">
    <a class="nav-link" href="/team/submission">
        <i class="fas fa-fw fa-file-word"></i>
        <span>Upload Proposal</span>
    </a>
</li>
<li class="nav-item {{ request()->is('team/video*') ? 'active' : '' }}">
    <a class="nav-link" href="/team/video">
        <i class="fas fa-fw fa-file-video"></i>
        <span>Upload Video</span>
    </a>
</li>
<li class="nav-item {{ request()->is('team/setting*') ? 'active' : '' }}">
    <a class="nav-link" href="/team/setting">
        <i class="fas fa-fw fa-cogs"></i>
        <span>Setting</span>
    </a>
</li>