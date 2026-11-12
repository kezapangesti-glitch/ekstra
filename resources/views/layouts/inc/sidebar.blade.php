
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar"
    style="background: linear-gradient(180deg, #1E3A5F 10%, #142A45 100%);">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"
       href="{{ Auth::user()->role == 'admin' ? route('admin.dashboard') : route('admin_ekstra.dashboard') }}">

        <div class="sidebar-brand-icon">
            <i class="fas fa-school"></i>
        </div>

        <div class="sidebar-brand-text mx-2">
            Ekstrakurikuler
        </div>
    </a>

    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item {{ request()->routeIs('admin.dashboard', 'admin_ekstra.dashboard') ? 'active' : '' }}">
        <a class="nav-link"
           href="{{ Auth::user()->role == 'admin' ? route('admin.dashboard') : route('admin_ekstra.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    @if(Auth::user()->role == 'admin')

        <!-- Ekstrakurikuler -->
        <li class="nav-item {{ request()->routeIs('admin.ekstra.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.ekstra.index') }}">
                <i class="fas fa-users"></i>
                <span>Ekstrakurikuler</span>
            </a>
        </li>

        <!-- Kelola Admin Ekstrakurikuler -->
        <li class="nav-item {{ request()->routeIs('admin.akun_admin_ekstra.*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.akun_admin_ekstra.index') }}">
                <i class="fas fa-user-cog"></i>
                <span>Admin Ekstrakurikuler</span>
            </a>
        </li>

    @endif

    <!-- Pendaftaran -->
    <li class="nav-item {{ request()->routeIs('admin.pendaftaran.*', 'admin_ekstra.pendaftaran.*') ? 'active' : '' }}">
        <a class="nav-link"
           href="{{ Auth::user()->role == 'admin' ? route('admin.pendaftaran.index') : route('admin_ekstra.pendaftaran.index') }}">
            <i class="fas fa-clipboard-list"></i>
            <span>Data Pendaftaran</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

</ul>
