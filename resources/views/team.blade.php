@extends('layouts.master')

@section('vite')
@vite(['resources/js/app.js','resources/js/team.js', 'resources/css/team.css'])
@endsection

@section('title', 'TEAM')

@section('content')
<div class="page-background position-relative">
    <div class="bg-color position-relative">
        <div id="team1 ">
            <div class="container hero-team data-aos="zoom-in"">
                <section id="slider">
                    <div class="container">
                        <h1 class="text-center position-relative mb-4"><b class="text-black underline-1">Inti</b></h1>
                        <div class="slider">
                            <div class="owl-carousel">
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="img/team/inti/ketua.png" alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b class="text-black">I Wayan Natura Adnyana</b></h5>
                                    <p class="mb-0 text-center text-black">TI-MTI</p>
                                    <p class="text-black text-center">
                                        <i class="bi bi-facebook px-2"></i>
                                        <i class="bi bi-instagram"></i>
                                        <i class="bi bi-linkedin px-2"></i>
                                    </p>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="img/team/inti/wakil.png" alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b class="text-black">I Made Mei Sastra Jayadi</b></h5>
                                    <p class="mb-0 text-center text-black">TI-MTI</p>
                                    <p class="text-black text-center p-4">
                                        <i class="bi bi-facebook px-2"></i>
                                        <i class="bi bi-instagram"></i>
                                        <i class="bi bi-linkedin px-2"></i>
                                    </p>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="img/team/inti/sekretaris_1.png" alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b class="text-black">I Gede Oka Darma Putra</b></h5>
                                    <p class="mb-0 text-center text-black">TI-MTI</p>
                                    <p class="text-black text-center p-4">
                                        <i class="bi bi-facebook px-2"></i>
                                        <i class="bi bi-instagram"></i>
                                        <i class="bi bi-linkedin px-2"></i>
                                    </p>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="img/team/inti/sekretaris_2.png" alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b class="text-black">Maria Adventalia Nera</b></h5>
                                    <p class="mb-0 text-center text-black">TI-MTI</p>
                                    <p class="text-black text-center p-4">
                                        <i class="bi bi-facebook px-2"></i>
                                        <i class="bi bi-instagram"></i>
                                        <i class="bi bi-linkedin px-2"></i>
                                    </p>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="img/team/inti/bendahara_1.png" alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b class="text-black">I Kadek Setiawan </b></h5>
                                    <p class="mb-0 text-center text-black">TI-MTI</p>
                                    <p class="text-black text-center p-4">
                                        <i class="bi bi-facebook px-2"></i>
                                        <i class="bi bi-instagram"></i>
                                        <i class="bi bi-linkedin px-2"></i>
                                    </p>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="img/team/inti/bendahara_2.png" alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b class="text-black">Siti Romadiah </b></h5>
                                    <p class="mb-0 text-center text-black">TI-MTI</p>
                                    <p class="text-black text-center p-4">
                                        <i class="bi bi-facebook px-2"></i>
                                        <i class="bi bi-instagram"></i>
                                        <i class="bi bi-linkedin px-2"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>

        <div id="team2">
            <div class="container hero-team ">
                <section id="slider">
                    <div class="container">
                        <h1 class="text-center position-relative mb-4" data-aos="zoom-out-down" data-aos-delay="10" data-aos-duration="1000"><b class="text-black underline-1">Non Divisi</b>
                        </h1>
                        <div class="slider" data-aos="zoom-out-down" data-aos-delay="20" data-aos-duration="1000">
                            <div class="owl-carousel">
                                <div class="slider-card" >
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="img/team/non-divisi/data_science.png " alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b class="text-black">I Made Adrian Astalina Pramata</b></h5>
                                    <p class="mb-0 text-center text-black">TI-MTI</p>
                                    <p class="text-black text-center">
                                        <i class="bi bi-facebook px-2"></i>
                                        <i class="bi bi-instagram"></i>
                                        <i class="bi bi-linkedin px-2"></i>
                                    </p>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="img/team/non-divisi/web.png" alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b class="text-black">I Gede Tresna Agustina Putra</b></h5>
                                    <p class="mb-0 text-center text-black">TI-MTI</p>
                                    <p class="text-black text-center p-4">
                                        <i class="bi bi-facebook px-2"></i>
                                        <i class="bi bi-instagram"></i>
                                        <i class="bi bi-linkedin px-2"></i>
                                    </p>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="img/team/non-divisi/mobile.png" alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b class="text-black">Putu Rades Pratama</b></h5>
                                    <p class="mb-0 text-center text-black">TI-MTI</p>
                                    <p class="text-black text-center p-4">
                                        <i class="bi bi-facebook px-2"></i>
                                        <i class="bi bi-instagram"></i>
                                        <i class="bi bi-linkedin px-2"></i>
                                    </p>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="img/team/non-divisi/ui_ux.png" alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b class="text-black">Marcell Budi Putra</b>
                                    <p class="mb-0 text-center text-black">TI-MTI</p>
                                    </h5>
                                    <p class="text-black text-center p-4 py-2">
                                        <i class="bi bi-facebook px-2"></i>
                                        <i class="bi bi-instagram"></i>
                                        <i class="bi bi-linkedin px-2"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>

        <div id="team3" class="container hero-team d-flex justify-content-center align-items-center">
    <section id="slider-divisi">
        <div class="container">
            <h1 class="text-center position-relative mb-4" data-aos="zoom-out-down" data-aos-delay="10" data-aos-duration="1000"><b class="text-black underline-1">Divisi</b></h1>
            <div class="row justify-content-center align-items-center" data-aos="zoom-out-down" data-aos-delay="20" data-aos-duration="1000">
                <div class="col-md-6">
                    <div class="slider-card-divisi pb-4">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="img/team/divisi/pubdok.png" alt="">
                        </div>
                        <h5 class="mt-3 mb-0 text-center"><b class="text-black">I Gede Juniarta</b></h5>
                        <p class="mb-0 text-center text-black">TI-MTI</p>
                        <p class="text-black text-center">
                            <i class="bi bi-facebook px-2"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-linkedin px-2"></i>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="slider-card-divisi pb-4">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="img/team/divisi/humas.png" alt="">
                        </div>
                        <h5 class="mt-3 mb-0 text-center"><b class="text-black">I Gede Agus Pramana Satria Wiweka</b></h5>
                        <p class="mb-0 text-center text-black">TI-MTI</p>
                        <p class="text-black text-center">
                            <i class="bi bi-facebook px-2"></i>
                            <i class="bi bi-instagram"></i>
                            <i class="bi bi-linkedin px-2"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


    </div>
</div>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
