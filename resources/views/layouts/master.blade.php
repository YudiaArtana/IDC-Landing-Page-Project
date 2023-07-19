<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/js/app.js'])

  <script src="https://kit.fontawesome.com/e7badc6d00.js" crossorigin="anonymous"></script>
  <title>@yield('title')</title>
</head>
<body>
  <header id="navbar">
    @include('layouts.navbar')
  </header>
@yield('content')
@include('layouts.footer')
@yield('js')

<!-- NAVBAR SCRIPT -->
<script>
  const navigationBar = document.getElementById("container-bg");
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
    console.log('show')
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
</body>
</html>
