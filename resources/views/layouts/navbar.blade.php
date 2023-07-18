<nav class="nav-container">
  <a href=""><img src="img/idc-2.png" alt="" width="100"></a>
  <button class="nav-toggler" id="nav-collapse-show">
    <i class="fas fa-solid fa-bars"></i>
  </button>
  <ul class="nav-link">
    <li><a class="{{ request()->is('home') ? 'active' : '' }}" href="{{ url('/home') }}">HOME</a></li>
    <li><a class="{{ request()->is('news') ? 'active' : '' }}" href="{{ url('/news') }}">BERITA</a></li>
    <li><a class="{{ request()->is('proker') ? 'active' : '' }}" href="{{ url('/proker') }}">PROGRAM KERJA</a></li>
    <li><a class="{{ request()->is('team') ? 'active' : '' }}" href="{{ url('/team') }}">TEAM</a></li>
    <li><a class="{{ request()->is('portfolio') ? 'active' : '' }}" href="{{ url('/portfolio') }}">PORTFOLIO</a></li>
    <li><a class="{{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">TENTANG KAMI</a></li>
  </ul>
  <div id="nav-shadow"></div>
  <div class="nav-collapse" id="nav-collapse">
    <button class="nav-collapse-close" id="nav-collapse-hidden">
      <i class="fas fa-solid fa-arrow-left"></i>
    </button>
    <ul class="nav-link-collapse">
      <li><a href="#main-hero">HOME</a></li>
      <li><a href="#berita">BERITA</a></li>
      <li><a href="{{ url('/home') }}">PROGRAM KERJA</a></li>
      <li><a href="{{ url('/home') }}">TEAM</a></li>
      <li><a href="{{ url('/home') }}">PORTFOLIO</a></li>
      <li><a href="{{ url('/home') }}">TENTANG KAMI</a></li>
    </ul>
  </div>
</nav>


@section('js')
<script>
  const navigationBar = document.getElementById("navbar");
  const navbarMenu = document.getElementById("nav-collapse");
  const buttonHidden = document.getElementById("nav-collapse-hidden");
  const buttonShow = document.getElementById("nav-collapse-show");
  const navbarShadow = document.getElementById("nav-shadow");

  window.onscroll = function() {
    if(window.scrollY > 30){
        navigationBar.classList.add("nav-bg")
    } else {
        navigationBar.classList.remove("nav-bg");   
    }
  }

  buttonShow.addEventListener("click", function(){
    navbarMenu.classList.toggle("show");
    navbarShadow.classList.toggle("shadow");
  });

  buttonHidden.addEventListener("click", function(){
    navbarMenu.classList.remove("show");
    navbarShadow.classList.remove("shadow");
  });

  navbarShadow.addEventListener("click", function(){
    navbarMenu.classList.remove("show");
    navbarShadow.classList.remove("shadow");
  });

  const updateClasses = () => {
    let screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    console.log(screenWidth);

    if (screenWidth >= 768) {
      navbarMenu.classList.remove("show");
      navbarShadow.classList.remove("shadow");
    } 
  }
  updateClasses();
  window.addEventListener("resize", updateClasses);

</script>
@endsection
