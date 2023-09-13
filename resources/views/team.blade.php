@extends('layouts.master')

@section('vite')
@vite(['resources/js/app.js', 'resources/js/team.js', 'resources/css/team.css'])
@endsection

@section('title', 'Home Page')

@section('content')
<div class="page-background position-relative">
    <div class="bg-color position-relative">
        <div class="container text-center">
            <div class="team-title d-flex flex-column justify-content-center align-items-center text-center"
            data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000">
                <h5 style="color: #ED1F24;">IDC TEAM</h5>
                <h3 class="lh-base">Let's get to know us, the creative developer community team!</h3>
            </div>
            <div class="judul-tim" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500">
                <h2>CORE TEAM</h2>
            </div>
            <div class="row pt-4">
                <div class="col-lg-4 col-md-6 col-sm-12 inti">
                    <div class="single-box" data-aos="flip-left" data-aos-delay="100" data-aos-duration="1000">
                        <div class="header-area img1">
                        </div>
                        <div class="body-area">
                            <h3 class="pt-0">I Wayan Natura Adnyana</h3>
                            <h4>Leader</h4>
                            <p class="socials"><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i
                                    class="fa fa-instagram"></i> <i class="fa fa-linkedin"></i></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 inti">
                    <div class="single-box" data-aos="flip-left" data-aos-delay="200" data-aos-duration="1000">
                        <div class="header-area img2"></div>
                        <div class="body-area">
                            <h3>I Made Mei Sastra Wijaya</h3>
                            <h4>Vice Leader</h4>
                            <p class="socials"><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i
                                    class="fa fa-instagram"></i> <i class="fa fa-linkedin"></i></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 inti">
                    <div class="single-box" data-aos="flip-left" data-aos-delay="300" data-aos-duration="1000">
                        <div class="header-area img3"></div>
                        <div class="body-area">
                            <h3>I Gede Oka Darma Putra</h3>
                            <h4>Secretary</h4>
                            <p class="socials"><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i
                                    class="fa fa-instagram"></i> <i class="fa fa-linkedin"></i></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-lg-4 col-md-6 col-sm-12 inti">
                    <div class="single-box" data-aos="flip-left" data-aos-delay="400" data-aos-duration="1000">
                        <div class="header-area img4"></div>
                        <div class="body-area">
                            <h3>Maria Adventalia Nera</h3>
                            <h4>Assistant Secretary</h4>
                            <p class="socials"><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i
                                    class="fa fa-instagram"></i> <i class="fa fa-linkedin"></i></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 inti">
                    <div class="single-box" data-aos="flip-left" data-aos-delay="500" data-aos-duration="1000">
                        <div class="header-area img5"></div>
                        <div class="body-area">
                            <h3>I Kadek Setiawan</h3>
                            <h4>Treasurer</h4>
                            <p class="socials"><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i
                                    class="fa fa-instagram"></i> <i class="fa fa-linkedin"></i></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 inti">
                    <div class="single-box" data-aos="flip-left" data-aos-delay="600" data-aos-duration="1000">
                        <div class="header-area img6"></div>
                        <div class="body-area">
                            <h3>Siti Romadiah</h3>
                            <h4>Assistant Treasurer</h4>
                            <p class="socials"><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i
                                    class="fa fa-instagram"></i> <i class="fa fa-linkedin"></i></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="judul-tim" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500">
                <h2>NON-DIVISION TEAM</h2>
            </div>
            <div class="row pt-4">
                <div class="col-lg-3 col-md-6 col-sm-12 non-divisi">
                    <div class="single-box" data-aos="flip-left" data-aos-delay="100" data-aos-duration="1000">
                        <div class="header-area img7"></div>
                        <div class="body-area">
                            <h3>I Made Adrian Astlina P.</h3>
                            <h4>Core Data Science</h4>
                            <p class="socials"><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i
                                    class="fa fa-instagram"></i> <i class="fa fa-linkedin"></i></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 non-divisi">
                    <div class="single-box" data-aos="flip-left" data-aos-delay="200" data-aos-duration="1000">
                        <div class="header-area img8"></div>
                        <div class="body-area">
                            <h3>I Gede Tresna Agustina P.</h3>
                            <h4>Core Web</h4>
                            <p class="socials"><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i
                                    class="fa fa-instagram"></i> <i class="fa fa-linkedin"></i></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 non-divisi">
                    <div class="single-box" data-aos="flip-left" data-aos-delay="300" data-aos-duration="1000">
                        <div class="header-area img9"></div>
                        <div class="body-area">
                            <h3>Marcel Budi Putra</h3>
                            <h4>Core UI/UX</h4>
                            <p class="socials"><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i
                                    class="fa fa-instagram"></i> <i class="fa fa-linkedin"></i></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 non-divisi">
                    <div class="single-box" data-aos="flip-left" data-aos-delay="400" data-aos-duration="1000">
                        <div class="header-area img10"></div>
                        <div class="body-area">
                            <h3>Putu Rades Pratama</h3>
                            <h4>Core Mobile</h4>
                            <p class="socials"><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i
                                    class="fa fa-instagram"></i> <i class="fa fa-linkedin"></i></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="judul-tim" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500">
                <h2>DIVISION TEAM</h2>
            </div>
            <div class="row d-flex flex-row justify-content-center align-items-center text-center pt-4">
                <div class="col-lg-6 col-md-6 col-sm-12 divisi1">
                    <div class="single-box" data-aos="flip-left" data-aos-delay="200" data-aos-duration="1000">
                        <div class="header-area img11"></div>
                        <div class="body-area">
                            <h3>I Gede Agus Pramana S. W.</h3>
                            <h4>Core Humas</h4>
                            <p class="socials"><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i
                                    class="fa fa-instagram"></i> <i class="fa fa-linkedin"></i></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 divisi2">
                    <div class="single-box" data-aos="flip-left" data-aos-delay="3  00" data-aos-duration="1000">
                        <div class="header-area img12"></div>
                        <div class="body-area">
                            <h3>I Gede Juniarta</h3>
                            <h4>Core Pubdok</h4>
                            <p class="socials"><i class="fa fa-facebook"></i> <i class="fa fa-twitter"></i> <i
                                    class="fa fa-instagram"></i> <i class="fa fa-linkedin"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
