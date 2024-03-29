<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/idc-1.png" type="image/x-icon">
  @yield('vite')
  <script src="https://kit.fontawesome.com/e7badc6d00.js" crossorigin="anonymous"></script>
  <title>@yield('title')</title>
  <style>
::-webkit-scrollbar {
  width: 10px;
}

/* Gaya untuk track (lintasan) scrollbar */
::-webkit-scrollbar-track {
  background: #3B3B4D; /* Ubah latar belakang menjadi transparan */
}

/* Gaya untuk thumb (grip) scrollbar */
::-webkit-scrollbar-thumb {
  background: #B8B9C3;
  border-radius: 5px;
}

/* Gaya hover pada thumb scrollbar */
::-webkit-scrollbar-thumb:hover {
  background: #D0D1D9;
}


#toTop{
  width: 100px;
  height: 100px;
  position: fixed;
  right: 10px;
  bottom: 10px;
  text-align: center;
  cursor: pointer;
  z-index: 999;
  display: none;
  transition: 0.3s ease;
}

#toTop:hover{
  bottom: 20px;
  transition: bottom 0.3s ease;
}

@keyframes shake {
  0%, 100% {
    transform: translate(-50%, -50%) translateX(0);
  }
  10%, 90% {
    transform: translate(-50%, -50%) translateX(-5px);
  }
  20%, 80% {
    transform: translate(-50%, -50%) translateX(5px);
  }
  30%, 70% {
    transform: translate(-50%, -50%) translateX(-5px);
  }
  40%, 60% {
    transform: translate(-50%, -50%) translateX(5px);
  }
}

#toTop img {
  width: 70px;
  height: 70px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  animation: shake 10s ease-in-out  infinite; /* Menggunakan animasi "shake" dengan durasi 1 detik dan berulang tak terbatas */
}

.rotate{
  transform: rotate(-45deg)
}



.hidden-to-top{
  display: none !important;
}

  </style>
</head>
<body>

  <div id="toTop" class="rotate" onclick="toTop()">
    <img src="img/rocket.gif"  alt="">
  </div>

  <header id="navbar">
    @include('layouts.navbar')
  </header>
  <div class="page-background position-relative">
    <div class="bg-color position-relative">
      @yield('content')
      @include('layouts.footer')
    </div>
  </div>
@yield('js')

<!-- NAVBAR SCRIPT -->
<script>
  const navigationBar = document.getElementById("container-bg");
  const navbarMenu = document.getElementById("nav-collapse");
  const buttonHidden = document.getElementById("nav-collapse-hidden");
  const buttonShow = document.getElementById("nav-collapse-show");
  const navbarShadow = document.getElementById("nav-shadow");
  const buttonTop = document.getElementById("toTop");

  window.onscroll = function() {
    if(window.scrollY > 30){
        navigationBar.classList.add("nav-bg")
    } else {
        navigationBar.classList.remove("nav-bg");   
    }

    if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20){
      buttonTop.style.display = "block";
    } else{
      buttonTop.style.display = "none";
    }
  }

  function toTop(){
    document.documentElement.scrollTop = 0;
  }


  buttonShow.addEventListener("click", function(){
    // console.log('show')
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
    // console.log(screenWidth);

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
