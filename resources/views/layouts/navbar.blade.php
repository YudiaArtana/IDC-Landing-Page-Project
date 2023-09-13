<nav class="navbar mt-3 ps-3 pe-3">
<div id="nav-shadow"></div>
  <div id="container-bg" class="container rounded-2 py-3 px-4">
    <a class="navbar-brand" href=""><img src="img/idc-2.png" alt="" width="100"></a>
    <ul class="nav-link link-list m-0">
      <li><a class="{{ request()->is('home') ? 'active' : '' }}" href="{{ url('/home') }}">Home</a></li>
      <li><a class="{{ request()->is('news') ? 'active' : '' }}" href="{{ url('/news') }}">Berita</a></li>
      <li><a class="{{ request()->is('proker') ? 'active' : '' }}" href="{{ url('/proker') }}">Program Kerja</a></li>
      <li><a class="{{ request()->is('team') ? 'active' : '' }}" href="{{ url('/team') }}">Team</a></li>
      <li><a class="{{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">Tentang Kami</a></li>
    </ul>
    <a href="{{ url('/join') }}"><button class="py-2 px-5 join rounded-2 btn btn-default fw-medium text-white">Join</button></a>

    <button class="nav-toggler d-flex justify-content-center align-items-center" id="nav-collapse-show">
      <i class="fas fa-solid fa-bars fs-1"></i>
    </button>
  </div>
</nav>

<div class="nav-collapse" id="nav-collapse">
  <button class="nav-collapse-close" id="nav-collapse-hidden">
    <i class="fas fa-solid fa-arrow-left fs-2"></i>
  </button>
    <ul class="nav-link-collapse m-0">
      <li><a class="{{ request()->is('home') ? 'active' : '' }}" href="{{ url('/home') }}">Home</a></li>
      <li><a class="{{ request()->is('news') ? 'active' : '' }}" href="{{ url('/news') }}">Berita</a></li>
      <li><a class="{{ request()->is('proker') ? 'active' : '' }}" href="{{ url('/proker') }}">Program Kerja</a></li>
      <li><a class="{{ request()->is('team') ? 'active' : '' }}" href="{{ url('/team') }}">Team</a></li>
      <li><a class="{{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">Tentang</a></li>

      <li><button class="py-2 px-5 rounded-2 btn btn-default fw-medium text-white">Join</button></li>
    </ul>
    
</div>

