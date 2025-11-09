<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">EduFun</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @yield('home')" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle @yield('category')" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('matakuliah.datascience') }}">Data Science</a></li>
            <li><a class="dropdown-item" href="{{ route('matakuliah.networksecurity') }}">Network Security</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('writers')" href="{{ route('writers') }}">Writers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('aboutus')" href="{{ route('aboutus') }}">About us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>