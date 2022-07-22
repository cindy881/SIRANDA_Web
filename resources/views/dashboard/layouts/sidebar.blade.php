<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
    {{-- <div class="container bg-secondary px-0">
      <a class=" nav-link {{ Request::is('home') ? 'active' : '' }} text-light" aria-current="page" href="{{ url('/') }}">
        <span class="text-light" data-feather="arrow-left"></span>
        Back to home
      </a>
    </div> --}}
    <div class="position-sticky pt-4 ms-1">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-light {{ Request::is('dashboard') ? 'active' : '' }}" style="font-size: 1rem;" aria-current="page" href="{{ url('/dashboard') }}">
            <span data-feather="sidebar"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light {{ Request::is('dashboard/pelanggaran*') ? 'active' : '' }}" style="font-size: 1rem;" href="{{ url('/dashboard/pelanggaran') }}">
            <span data-feather="file-text"></span>
            Data Pelanggaran 
          </a>
        </li>
        <li><hr style="background-color: aliceblue;"></li>
        <li class="nav-item">
          <a class="nav-link text-light {{ Request::is('dashboard/profile*') ? 'active' : '' }}" style="font-size: 1rem;" href="{{ route('profile') }}">
            <span data-feather="user"></span>
            Profile 
          </a>
        </li>
      </ul>
    </div>
</nav>