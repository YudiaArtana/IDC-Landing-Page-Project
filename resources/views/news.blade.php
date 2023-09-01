@extends('layouts.master')

@section('vite')
    @vite(['resources/js/app.js', 'resources/js/news.js', 'resources/css/news.css'])
@endsection

@section('title', 'News')

@section('content')
<div class="page-background position-relative">
    <div class="bg-color position-relative">
        <div id="main-hero-news-1">
            <div class="container hero-news">
                <section id="slider">
                    <div class="container">
                        <h1 class="text-center position-relative mb-4" data-aos="zoom-out-down" data-aos-delay="50" data-aos-duration="1000"><b class="underline-1">Berita Sekilas</b></h1>
                        <div class="slider" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000">
                            <div class="owl-carousel">
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="img/news/AMA with TechConnect.jpg" alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b class="text-black" style="font-size: 18px;">AMA with TechConnect</b></h5>
                                    <p class="text-black text-center p-4" style="font-size: 13px;">Satisfy all your curiosities in the Ask Me Anything (AMA) session with TechConnect, coming up this Thursday on May 11th 2023!</p>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="img/news/Webinar-1.jpg" alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b class="text-black" style="font-size: 18px;">Webinar TechConnect Sandbox 2023</b></h5>
                                    <p class="text-black text-center p-4" style="font-size: 13px;">Jangan lewatkan kesempatan untuk memperlihatkan potensimu di TechConnect Sandbox 2023!</p>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="img/news/Seminar-1.jpg" alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b class="text-black" style="font-size: 18px;">Seminar Nasional</b></h5>
                                    <p class="text-black text-center p-4" style="font-size: 13px;">Sudah siap menjadi seorang Website Developer? Kami dari INSTIKI Developer Club, Unit Kegiatan Mahasiswa INSTIKI.</p>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="img/news/pengabdian-kepada-masyarakat.jpg" alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b class="text-black" style="font-size: 18px;">Pengabdian Kepada Masyarakat</b></h5>
                                    <p class="text-black text-center p-4" style="font-size: 13px;">Komunitas INSTIKI Developer Club bergerak menuju yayasan Tat Twam Asi, panti asuhan yang terletak di Jl. Jaya Giri IX no. 6 Denpasar.</p>
                                </div>
                                <div class="slider-card">
                                    <div class="d-flex justify-content-center align-items-center mb-4">
                                        <img src="img/news/Hackfest 2023.jpg" alt="">
                                    </div>
                                    <h5 class="mb-0 text-center"><b class="text-black" style="font-size: 18px;">Hackfest 2023</b></h5>
                                    <p class="text-black text-center p-4" style="font-size: 13px;">Good news! We've extended the registration deadline for our upcoming HackFest</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="container main-news section border border-0">
            <div class="row">
                <div class="section-title-news">
                    <h1 class="mb-4" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000"><b class="underline-3">Prestasi</b></h1>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="card text-bg-dark card-prestasi" data-aos="zoom-out-right" data-aos-delay="50" data-aos-duration="1000">
                        <img src="img/news/Prestasi-1.png" class="card-img opacity-50" alt="...">
                        <div class="card-img-overlay card-prestasi-content-1">
                            <h5 class="card-title">Juara I Desain Web</h5>
                            <p class="card-text">Juara lomba desain web adalah prestasi yang membanggakan bagi para peserta yang telah berhasil menghasilkan karya desain web yang kreatif dan menarik.</p>
                            <p class="card-text"><small>Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="row" data-aos="zoom-out-left" data-aos-delay="50" data-aos-duration="1000">
                        <div class="col-sm-6 col-md-6 col-lg-6 column-2">
                            <div class="card text-bg-dark mb-3 card-prestasi">
                                <img src="img/news/Prestasi-2.png" class="card-img opacity-50" alt="...">
                                <div class="card-img-overlay card-prestasi-content-2">
                                    <h5 class="card-title">Juara II UI/UX Design</h5>
                                    <p class="card-text"><small>Last updated 33 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card text-bg-dark card-prestasi">
                                <img src="img/news/Prestasi-3.png" class="card-img opacity-50" alt="...">
                                <div class="card-img-overlay card-prestasi-content-3">
                                    <h5 class="card-title">Juara II Web Development</h5>
                                    <p class="card-text"><small>Last updated 13 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 column-3">
                            <div class="card text-bg-dark mb-3 card-prestasi">
                                <img src="img/news/Prestasi-4.png" class="card-img opacity-50" alt="...">
                                <div class="card-img-overlay card-prestasi-content-3">
                                    <h5 class="card-title">Juara II Mobile Development</h5>
                                    <p class="card-text"><small>Last updated 21 mins ago</small></p>
                                </div>
                            </div>
                            <div class="card text-bg-dark card-prestasi">
                                <img src="img/news/Prestasi-5.png" class="card-img opacity-50" alt="...">
                                <div class="card-img-overlay card-prestasi-content-3">
                                    <h5 class="card-title">Juara Harapan I Data Science</h5>
                                    <p class="card-text"><small>Last updated 45 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section border border-0">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="mb-4 mt-4">
                        <div class="section-title-news">
                            <h1 class="mb-4" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000"><b class="underline-3">Terbaru</b></h1>
                        </div>
                        <div class="row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <img class="thumb" src="img/news/pengabdian-kepada-masyarakat.jpg">
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <h5>
                                    <a href="https://www.instagram.com/p/CuiW4N9PYtQ/" class="trending-title">
                                        Pengabdian Kepada Masyarakat
                                    </a>
                                </h5>
                                <small>11 July, 2023</small>
                                <p class="summary pt-3">Komunitas INSTIKI Developer Club bergerak menuju yayasan Tat Twam Asi, panti asuhan yang terletak di Jl. Jaya Giri IX no. 6 Denpasar. Kami hadir untuk mengunjungi dan berbagi kasih sayang kepada anak-anak yang luar biasa. Hari ini, kami membuka kotak sumbangan, menyerukan kebaikan, dan membagikan kebahagiaan kepada mereka. Bersama, kita dapat membuat perbedaan besar dalam hidup mereka!</p>
                            </div>
                        </div>
                        <div class="row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <img class="thumb" src="img/news/Hari-Raya-Idul-Fitri.jpg">
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <h5>
                                <a href="https://www.instagram.com/p/CrS6c8XPIg4/" class="trending-title">
                                    Selamat Hari Raya Idul Fitri
                                </a>
                                </h5>
                                <small>21 April, 2023</small>
                                <p class="summary pt-3">Selamat merayakan Lebaran Idul Fitri 2023. Semoga kita semua senantiasa bahagia dan damai di hari yang fitri ini.</p>
                            </div>
                        </div>
                        <div class="row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <img class="thumb" src="img/news/Hari-Kartini.jpg">
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <h5>
                                <a href="https://www.instagram.com/p/CrQ7xyhvk-H/" class="trending-title">
                                    Selamat Hari Kartini
                                </a>
                                </h5>
                                <small>21 April, 2023</small>
                                <p class="summary pt-3">Tantangan dalam hidup datang silih berganti, tapi percayalah "Habis Gelap Terbitlah Terang". Selamat Hari Kartini!</p>
                            </div>
                        </div>
                        <div class="row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <img class="thumb" src="img/news/Hari-Raya-Jumat-Agung.jpg">
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <h5>
                                <a href="https://www.instagram.com/p/CquF4bMP9tb/" class="trending-title">
                                    Memperingati Wafatnya Isa Al-masi
                                </a>
                                </h5>
                                <small>7 April, 2023</small>
                                <p class="summary pt-3">Seluruh Anggota Ukm Instiki Developer Club(IDC) Mengucapkan,Selamat hari Jumat Agung, berdoa agar Tuhan memilikimu dalam cinta-Nya dan memberkatimu dengan rahmat-Nya di Hari Suci ini.</p>
                            </div>
                        </div>
                        <div class="row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <img class="thumb" src="img/news/Tech-Talk-Thursday-1.jpg">
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <h5>
                                <a href="https://www.instagram.com/p/CqSsTMJPnK1/" class="trending-title">
                                    Tech Talk Thursday: Managing Risk In A Risky World
                                </a>
                                </h5>
                                <small>27 March, 2023</small>
                                <p class="summary pt-3">Another new episode of Tech Talk Thursday is here. And we’re going to talk about "Managing Risk in a Risky World"</p>
                            </div>
                        </div>
                        <div class="row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <img class="thumb" src="img/news/Puasa-1.jpg">
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <h5>
                                <a href="https://www.instagram.com/p/CqIjP4nv1JG/" class="trending-title">
                                    Selamat Menunaikan Ibadah Puasa
                                </a>
                                </h5>
                                <small>23 March, 2023</small>
                                <p class="summary pt-3">Kami Dari Anggota IDC (Instiki Developer Club) Mengucapkan Selamat Merayakan Bulan Suci Penuh Kemenangan. Semoga Selalu Bisa Menjalani Ibadah dengan Lancar dan Tanpa Halangan.</p>
                            </div>
                        </div>
                        <div class="row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <img class="thumb" src="img/news/Dokumentasi-Seminar-1.jpg">
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <h5>
                                <a href="https://www.instagram.com/p/CptfuOnPdTA/?img_index=1" class="trending-title">
                                    Dokumentasi Seminar Nasional: Developing Skills For Becoming a Web Developer
                                </a>
                                </h5>
                                <small>13 March, 2023</small>
                                <p class="summary pt-3">Hai INSTIKI Devs👋 Mari kita lihat momen-momen berharga dari Seminar Nasional INSTIKI Developer Club dengan tema "Develop Skills for Becoming a Web Developer"! Acara ini berhasil membantu para peserta untuk memperluas wawasan dan meningkatkan keterampilan mereka dalam bidang pengembangan web. Terima kasih kepada semua pembicara dan peserta yang telah bergabung dalam seminar ini.</p>
                            </div>
                        </div>
                        <div class="row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <img class="thumb" src="img/news/Hari-Raya-Nyepi.jpg">
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <h5>
                                <a href="https://www.instagram.com/p/CqCa-6vPQnB/?img_index=1" class="trending-title">
                                    Selamat Hari Raya Nyepi Tahun Baru Saka 1945
                                </a>
                                </h5>
                                <small>21 March, 2023</small>
                                <p class="summary pt-3">"Hari Nyepi merupakan hari suci untuk seluruh umat hindu, luruhkan amarah, dendam, dan sifat-sifat buruk lainnya. Mari kita bangun sikap optimisme dan semangat." Kami dari UKM IDC Mengucapkan selamat hari raya nyepi tahun 2023,semoga kita tetap kuat dalam melaksanakan catur brata penyepian dan sehat selalu🙏🙏🙏</p>
                            </div>
                        </div>
                        <div class="row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <img class="thumb" src="img/news/Seminar-1.jpg">
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <h5>
                                <a href="https://www.instagram.com/p/CoNT9qsP_Wd/" class="trending-title">
                                    Seminar Nasional: Developing Skills For Becoming a Web Developer
                                </a>
                                </h5>
                                <small>4 February, 2023</small>
                                <p class="summary pt-3">Dengan di mentoring langsung oleh Prabu Rangki seorang Software Engineer di Kintell dari Google Developer Group. Soo! what you waiting guys? c'mon join and enjoy our event 🔥🔥get your new experience 🔥🔥 Dengan pelatihan dari pemateri yang luar biasa, bisa kalian dapatkan dengan harga yang affordable!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="trending mt-4">
                        <div class="section-title-news"  data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                            <h1 class="mb-4"><b class="underline-3">Populer</b></h1>
                        </div>
                        <div class="row border border-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <img class="thumb" src="img/news/Dokumentasi-Seminar-1.jpg">
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <a href="https://www.instagram.com/p/CoNT9qsP_Wd/" class="trending-title">
                                Dokumentasi Seminar Nasional: Developing Skills For Becoming a Web Developer
                                </a>
                            </div>
                        </div>
                        <div class="row border border-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <img class="thumb" src="img/news/Seminar-1.jpg">
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <a href="https://www.instagram.com/p/CoNT9qsP_Wd/" class="trending-title">
                                Seminar Nasional: Developing Skills For Becoming a Web Developer
                                </a>
                            </div>
                        </div>
                        <div class="row border border-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <img class="thumb" src="img/news/AMA with TechConnect.jpg">
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <a href="https://www.instagram.com/p/CsBjWWXPcOs/" class="trending-title">
                                Ask Me Anything (AMA) with TechConnect
                                </a>
                            </div>
                        </div>
                        <div class="row border border-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <img class="thumb" src="img/news/Hari-Raya-Jumat-Agung.jpg">
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <a href="https://www.instagram.com/p/CquF4bMP9tb/" class="trending-title">
                                Memperingati Wafatnya Isa Al-masi
                                </a>
                            </div>
                        </div>
                        <div class="row border border-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                                <img class="thumb" src="img/news/Hari-Raya-Nyepi.jpg">
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <a href="https://www.instagram.com/p/CqCa-6vPQnB/?img_index=1" class="trending-title">
                                Selamat Hari Raya Nyepi Tahun Baru Saka 1945
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container section mt-4 border border-0">
            <div class="section-title-news">
                <h1 class="mb-4" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000"><b class="underline-2">Media Partner</b></h1>
            </div>
            <div class="row text-center">
                <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3 mb-2" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">
                    <div class="mb-2 image image-md">
                        <a href="https://www.instagram.com/bem_instiki/">
                        <img class="thumb media-partner" src="img/news/bem-instiki.png">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3" data-aos="fade-right" data-aos-delay="150" data-aos-duration="1000">
                    <div class="mb-2 image image-md">
                        <a href="https://www.instagram.com/hima.ti.instiki/">
                        <img class="thumb media-partner" src="img/news/hima-ti-instiki.png">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3" data-aos="fade-right" data-aos-delay="250" data-aos-duration="1000">
                    <div class="mb-2 image image-md">
                        <a href="https://www.instagram.com/ins.id_/">
                        <img class="thumb media-partner" src="img/news/inspiration-dance-instiki.png">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3 mb-2" data-aos="fade-right" data-aos-delay="350" data-aos-duration="1000">
                    <div class="mb-2 image image-md">
                        <a href="https://www.instagram.com/infobalinews/">
                        <img class="thumb media-partner" src="img/news/info-bali-news.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection