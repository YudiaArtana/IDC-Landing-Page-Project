@extends('layouts.master')

@section('vite')
  @vite(['resources/js/app.js','resources/js/team.js', 'resources/css/team.css'])
@endsection

@section('title', 'TEAM')

@section('content')

<div id="team1" >
    <svg id="wave" class="position-absolute" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 440" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(62, 108.112, 243, 1)" offset="0%"></stop><stop stop-color="rgba(6.459, 201.112, 250.767, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,282L60,235C120,188,240,94,360,62.7C480,31,600,63,720,94C840,125,960,157,1080,148.8C1200,141,1320,94,1440,133.2C1560,172,1680,298,1800,313.3C1920,329,2040,235,2160,235C2280,235,2400,329,2520,313.3C2640,298,2760,172,2880,164.5C3000,157,3120,266,3240,282C3360,298,3480,219,3600,180.2C3720,141,3840,141,3960,156.7C4080,172,4200,204,4320,242.8C4440,282,4560,329,4680,321.2C4800,313,4920,251,5040,203.7C5160,157,5280,125,5400,148.8C5520,172,5640,251,5760,258.5C5880,266,6000,204,6120,219.3C6240,235,6360,329,6480,360.3C6600,392,6720,360,6840,321.2C6960,282,7080,235,7200,211.5C7320,188,7440,188,7560,203.7C7680,219,7800,251,7920,274.2C8040,298,8160,313,8280,313.3C8400,313,8520,298,8580,289.8L8640,282L8640,470L8580,470C8520,470,8400,470,8280,470C8160,470,8040,470,7920,470C7800,470,7680,470,7560,470C7440,470,7320,470,7200,470C7080,470,6960,470,6840,470C6720,470,6600,470,6480,470C6360,470,6240,470,6120,470C6000,470,5880,470,5760,470C5640,470,5520,470,5400,470C5280,470,5160,470,5040,470C4920,470,4800,470,4680,470C4560,470,4440,470,4320,470C4200,470,4080,470,3960,470C3840,470,3720,470,3600,470C3480,470,3360,470,3240,470C3120,470,3000,470,2880,470C2760,470,2640,470,2520,470C2400,470,2280,470,2160,470C2040,470,1920,470,1800,470C1680,470,1560,470,1440,470C1320,470,1200,470,1080,470C960,470,840,470,720,470C600,470,480,470,360,470C240,470,120,470,60,470L0,470Z"></path></svg>
    <div class="container hero-team">
        <section id="slider">
            <div class="container">
                <h1 class="text-center position-relative mb-4"><b class="text-black underline-1">Berita Sekilas</b></h1>
                <div class="slider">
                    <div class="owl-carousel">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/team/inti/ketua.png" alt="" >
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">AMA with TechConnect</b></h5>
                                <p class="text-black text-center">
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-facebook"></i>
                                </p>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/team/inti/wakil.png" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">Webinar TechConnect Sandbox 2023</b></h5>
                                <p class="text-black text-center p-4">
                                    <i class="bi bi-facebook"></i>
                                </p>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/team/inti/sekretaris_1.png" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">Seminar Nasional</b></h5>
                                <p class="text-black text-center p-4">
                                    <i class="bi bi-facebook"></i>
                                </p>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/team/inti/sekretaris_2.png" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">Pengabdian Kepada Masyarakat</b></h5>
                                <p class="text-black text-center p-4">
                                    <i class="bi bi-facebook"></i>
                                </p>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/team/inti/bendahara_1.png" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">Hackfest 2023</b></h5>
                                <p class="text-black text-center p-4">
                                    <i class="bi bi-facebook"></i>
                                </p>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/team/inti/bendahara_2.png" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">Hackfest 2023</b></h5>
                                <p class="text-black text-center p-4">
                                    <i class="bi bi-facebook"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<div id="team1" >
      <div class="container hero-team">
        <section id="slider">
            <div class="container">
                <h1 class="text-center position-relative mb-4"><b class="text-black underline-1">Berita Sekilas</b></h1>
                <div class="slider">
                    <div class="owl-carousel">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/team/inti/ketua.png" alt="" >
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">AMA with TechConnect</b></h5>
                                <p class="text-black text-center">
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-facebook"></i>
                                    <i class="bi bi-facebook"></i>
                                </p>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/team/inti/wakil.png" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">Webinar TechConnect Sandbox 2023</b></h5>
                                <p class="text-black text-center p-4">
                                    <i class="bi bi-facebook"></i>
                                </p>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/team/inti/sekretaris_1.png" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">Seminar Nasional</b></h5>
                                <p class="text-black text-center p-4">
                                    <i class="bi bi-facebook"></i>
                                </p>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/team/inti/sekretaris_2.png" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">Pengabdian Kepada Masyarakat</b></h5>
                                <p class="text-black text-center p-4">
                                    <i class="bi bi-facebook"></i>
                                </p>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/team/inti/bendahara_1.png" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">Hackfest 2023</b></h5>
                                <p class="text-black text-center p-4">
                                    <i class="bi bi-facebook"></i>
                                </p>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/team/inti/bendahara_2.png" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">Hackfest 2023</b></h5>
                                <p class="text-black text-center p-4">
                                    <i class="bi bi-facebook"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
