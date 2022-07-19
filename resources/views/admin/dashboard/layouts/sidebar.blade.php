<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    {{-- <div class="container bg-secondary px-0">
      <a class=" nav-link {{ Request::is('home') ? 'active' : '' }} text-light" aria-current="page" href="{{ url('/') }}">
        <span class="text-light" data-feather="arrow-left"></span>
        Back to home
      </a>
    </div> --}}
    <div class="position-sticky pt-4 mx-2">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-light {{ Request::is('admin/dashboard') ? 'active' : '' }}" style="font-size: 1rem;" aria-current="page" href="{{ route('admin.dashboard') }}">
            <span data-feather="sidebar"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light {{ Request::is('admin/dashboard/peraturan*') ? 'active' : '' }}" style="font-size: 1rem;" href="{{ url('/admin/dashboard/peraturan') }}">
            <span data-feather="file-text"></span>
            Peraturan
          </a>
        </li>
        <li><hr style="background-color: aliceblue;"></li>
        <li class="nav-item">
          <a class="nav-link text-light {{ Request::is('admin/dashboard/profile*') ? 'active' : '' }}" style="font-size: 1rem;" href="{{ url('/admin/dashboard/profile') }}">
            <span data-feather="user"></span>
            Profile 
          </a>
        </li>
      </ul>
    </div>
</nav>