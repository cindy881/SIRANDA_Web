<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <a class="navbar-brand" href="{{ route('home') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
            Dashboard
            </a>
        </li>
        <li class="nav-title">Data</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard/pelanggaran') }}">
            Data Pelanggaran
            </a>
        </li>
        <li class="nav-title">User</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard/profile') }}">
            Profile
            </a>
        </li>
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
  </div>