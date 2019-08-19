<li class="nav-item {{ request()->is('admin/list-tim*') ? 'active' : '' }}">
    <a class="nav-link " href="/admin/list-tim">
        <i class="fas fa-fw fa-users"></i>
        <span>List Tim</span>
    </a>
</li>
<li class="nav-item {{ request()->is('admin/admin-payment*') ? 'active' : '' }}">
    <a class="nav-link " href="/admin/admin-payment">
        <i class="fas fa-fw fa-dollar-sign"></i>
        <span>Pembayaran</span>
    </a>
</li>
<li class="nav-item {{ request()->is('admin/submission*') ? 'active' : '' }}">
    <a class="nav-link" href="/admin/submission">
        <i class="fas fa-fw fa-file-word"></i>
        <span>Submission</span>
    </a>
</li>
<li class="nav-item {{ request()->is('admin/commite*') ? 'active' : '' }}">
    <a class="nav-link" href="/admin/commite">
        <i class="fas fa-fw fa-user"></i>
        <span>User</span>
    </a>
</li>