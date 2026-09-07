<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"
    style="background: linear-gradient(180deg, #1E3A5F 10%, #142A45 100%);">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-2">
            Ekstrakurikuler
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Ekstrakurikuler -->
    <li class="nav-item {{ request()->routeIs('admin.ekstra.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.ekstra.index') }}">
            <i class="fas fa-users"></i>
            <span>Ekstrakurikuler</span>
        </a>
    </li>

    <!-- Pendaftaran -->
    <li class="nav-item {{ request()->routeIs('admin.pendaftaran.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.pendaftaran.index') }}">
            <i class="fas fa-clipboard-list"></i>
            <span>Data Pendaftaran</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>