@extends('layouts.master')

@section('vite')
  @vite(['resources/js/app.js', 'resources/js/news.js', 'resources/css/news.css'])
@endsection

@section('title', 'News')

@section('content')
<div id="main-hero-news-1">
    <svg id="wave" class="position-absolute" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 440" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(62, 108.112, 243, 1)" offset="0%"></stop><stop stop-color="rgba(6.459, 201.112, 250.767, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,282L60,235C120,188,240,94,360,62.7C480,31,600,63,720,94C840,125,960,157,1080,148.8C1200,141,1320,94,1440,133.2C1560,172,1680,298,1800,313.3C1920,329,2040,235,2160,235C2280,235,2400,329,2520,313.3C2640,298,2760,172,2880,164.5C3000,157,3120,266,3240,282C3360,298,3480,219,3600,180.2C3720,141,3840,141,3960,156.7C4080,172,4200,204,4320,242.8C4440,282,4560,329,4680,321.2C4800,313,4920,251,5040,203.7C5160,157,5280,125,5400,148.8C5520,172,5640,251,5760,258.5C5880,266,6000,204,6120,219.3C6240,235,6360,329,6480,360.3C6600,392,6720,360,6840,321.2C6960,282,7080,235,7200,211.5C7320,188,7440,188,7560,203.7C7680,219,7800,251,7920,274.2C8040,298,8160,313,8280,313.3C8400,313,8520,298,8580,289.8L8640,282L8640,470L8580,470C8520,470,8400,470,8280,470C8160,470,8040,470,7920,470C7800,470,7680,470,7560,470C7440,470,7320,470,7200,470C7080,470,6960,470,6840,470C6720,470,6600,470,6480,470C6360,470,6240,470,6120,470C6000,470,5880,470,5760,470C5640,470,5520,470,5400,470C5280,470,5160,470,5040,470C4920,470,4800,470,4680,470C4560,470,4440,470,4320,470C4200,470,4080,470,3960,470C3840,470,3720,470,3600,470C3480,470,3360,470,3240,470C3120,470,3000,470,2880,470C2760,470,2640,470,2520,470C2400,470,2280,470,2160,470C2040,470,1920,470,1800,470C1680,470,1560,470,1440,470C1320,470,1200,470,1080,470C960,470,840,470,720,470C600,470,480,470,360,470C240,470,120,470,60,470L0,470Z"></path></svg>
    <div class="container hero-news">
        <section id="slider">
            <div class="container">
                <h1 class="text-center position-relative mb-4" data-aos="zoom-out-down" data-aos-delay="50" data-aos-duration="1000"><b class="text-black underline-1">Berita Sekilas</b></h1>
                <div class="slider" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000">
                    <div class="owl-carousel">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/news/AMA with TechConnect.jpg" alt="" >
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">AMA with TechConnect</b></h5>
                                <p class="text-black text-center p-4">Satisfy all your curiosities in the Ask Me Anything (AMA) session with TechConnect, coming up this Thursday on May 11th 2023!</p>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/news/Webinar-1.jpg" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">Webinar TechConnect Sandbox 2023</b></h5>
                                <p class="text-black text-center p-4">Jangan lewatkan kesempatan untuk memperlihatkan potensimu di TechConnect Sandbox 2023!</p>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/news/Seminar-1.jpg" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">Seminar Nasional</b></h5>
                                <p class="text-black text-center p-4">Sudah siap menjadi seorang Website Developer? Kami dari INSTIKI Developer Club, Unit Kegiatan Mahasiswa INSTIKI.</p>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/news/pengabdian-kepada-masyarakat.jpg" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">Pengabdian Kepada Masyarakat</b></h5>
                                <p class="text-black text-center p-4">Komunitas INSTIKI Developer Club bergerak menuju yayasan Tat Twam Asi, panti asuhan yang terletak di Jl. Jaya Giri IX no. 6 Denpasar. Kami hadir untuk mengunjungi dan berbagi kasih sayang kepada anak-anak yang luar biasa.</p>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/news/Hackfest 2023.jpg" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b class="text-black">Hackfest 2023</b></h5>
                                <p class="text-black text-center p-4">Good news! We've extended the registration deadline for our upcoming HackFest</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="container main-news section">
    <div class="row">
        <div class="section-title-news">
            <h1 class="mb-4" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000"><b class="text-black underline-3">Prestasi</b></h1>
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
<div class="container section">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="mb-4 mt-4">
                <div class="section-title-news">
                    <h1 class="mb-4" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000"><b class="text-black underline-3">Terbaru</b></h1>
                </div>
                <div class="row mb-3 bb-1" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/pengabdian-kepada-masyarakat.jpg">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CuiW4N9PYtQ/">
                            Pengabdian Kepada Masyarakat
                        </a>
                        </h5>
                        <small>11 July, 2023</small>
                        <p class="summary pt-3">Komunitas INSTIKI Developer Club bergerak menuju yayasan Tat Twam Asi, panti asuhan yang terletak di Jl. Jaya Giri IX no. 6 Denpasar. Kami hadir untuk mengunjungi dan berbagi kasih sayang kepada anak-anak yang luar biasa. Hari ini, kami membuka kotak sumbangan, menyerukan kebaikan, dan membagikan kebahagiaan kepada mereka. Bersama, kita dapat membuat perbedaan besar dalam hidup mereka!</p>
                    </div>
                </div>
                <div class="row mb-3 bb-1" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Raya-Idul-Fitri.jpg">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CrS6c8XPIg4/">
                            Selamat Hari Raya Idul Fitri
                        </a>
                        </h5>
                        <small>21 April, 2023</small>
                        <p class="summary pt-3">Selamat merayakan Lebaran Idul Fitri 2023. Semoga kita semua senantiasa bahagia dan damai di hari yang fitri ini.</p>
                    </div>
                </div>
                <div class="row mb-3 bb-1" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Kartini.jpg">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CrQ7xyhvk-H/">
                            Selamat Hari Kartini
                        </a>
                        </h5>
                        <small>21 April, 2023</small>
                        <p class="summary pt-3">Tantangan dalam hidup datang silih berganti, tapi percayalah "Habis Gelap Terbitlah Terang". Selamat Hari Kartini!</p>
                    </div>
                </div>
                <div class="row mb-3 bb-1" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Raya-Jumat-Agung.jpg">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CquF4bMP9tb/">
                            Memperingati Wafatnya Isa Al-masi
                        </a>
                        </h5>
                        <small>7 April, 2023</small>
                        <p class="summary pt-3">Seluruh Anggota Ukm Instiki Developer Club(IDC) Mengucapkan,Selamat hari Jumat Agung, berdoa agar Tuhan memilikimu dalam cinta-Nya dan memberkatimu dengan rahmat-Nya di Hari Suci ini.</p>
                    </div>
                </div>
                <div class="row mb-3 bb-1" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Tech-Talk-Thursday-1.jpg">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CqSsTMJPnK1/">
                            Tech Talk Thursday: Managing Risk In A Risky World
                        </a>
                        </h5>
                        <small>27 March, 2023</small>
                        <p class="summary pt-3">Another new episode of Tech Talk Thursday is here. And we’re going to talk about "Managing Risk in a Risky World"</p>
                    </div>
                </div>
                <div class="row mb-3 bb-1" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Puasa-1.jpg">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CqIjP4nv1JG/">
                            Selamat Menunaikan Ibadah Puasa
                        </a>
                        </h5>
                        <small>23 March, 2023</small>
                        <p class="summary pt-3">Kami Dari Anggota IDC (Instiki Developer Club) Mengucapkan Selamat Merayakan Bulan Suci Penuh Kemenangan. Semoga Selalu Bisa Menjalani Ibadah dengan Lancar dan Tanpa Halangan.</p>
                    </div>
                </div>
                <div class="row mb-3 bb-1" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Dokumentasi-Seminar-1.jpg">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CptfuOnPdTA/?img_index=1">
                            Dokumentasi Seminar Nasional: Developing Skills For Becoming a Web Developer
                        </a>
                        </h5>
                        <small>13 March, 2023</small>
                        <p class="summary pt-3">Hai INSTIKI Devs👋 Mari kita lihat momen-momen berharga dari Seminar Nasional INSTIKI Developer Club dengan tema "Develop Skills for Becoming a Web Developer"! Acara ini berhasil membantu para peserta untuk memperluas wawasan dan meningkatkan keterampilan mereka dalam bidang pengembangan web. Terima kasih kepada semua pembicara dan peserta yang telah bergabung dalam seminar ini.</p>
                    </div>
                </div>
                <div class="row mb-3 bb-1" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Raya-Nyepi.jpg">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CqCa-6vPQnB/?img_index=1">
                            Selamat Hari Raya Nyepi Tahun Baru Saka 1945
                        </a>
                        </h5>
                        <small>21 March, 2023</small>
                        <p class="summary pt-3">"Hari Nyepi merupakan hari suci untuk seluruh umat hindu, luruhkan amarah, dendam, dan sifat-sifat buruk lainnya. Mari kita bangun sikap optimisme dan semangat." Kami dari UKM IDC Mengucapkan selamat hari raya nyepi tahun 2023,semoga kita tetap kuat dalam melaksanakan catur brata penyepian dan sehat selalu🙏🙏🙏</p>
                    </div>
                </div>
                <div class="row mb-3 bb-1" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Seminar-1.jpg">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CoNT9qsP_Wd/">
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
                <div class="section-title-news">
                    <h1 class="mb-4" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000"><b class="text-black underline-3">Populer</b></h1>
                </div>
                <div class="row" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Dokumentasi-Seminar-1.jpg">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <a href="https://www.instagram.com/p/CptfuOnPdTA/?img_index=1">
                        Dokumentasi Seminar Nasional: Developing Skills For Becoming a Web Developer
                        </a>
                    </div>
                    </div>
                <div class="row" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Seminar-1.jpg">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <a href="https://www.instagram.com/p/CoNT9qsP_Wd/">
                        Seminar Nasional: Developing Skills For Becoming a Web Developer
                        </a>
                    </div>
                </div>
                <div class="row" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/AMA with TechConnect.jpg">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <a href="https://www.instagram.com/p/CsBjWWXPcOs/">
                        Ask Me Anything (AMA) with TechConnect
                        </a>
                    </div>
                </div>
                <div class="row" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Raya-Jumat-Agung.jpg">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <a href="https://www.instagram.com/p/CquF4bMP9tb/">
                        Memperingati Wafatnya Isa Al-masi
                        </a>
                    </div>
                </div>
                <div class="row" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Raya-Nyepi.jpg">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <a href="https://www.instagram.com/p/CqCa-6vPQnB/?img_index=1">
                        Selamat Hari Raya Nyepi Tahun Baru Saka 1945
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container section mt-4">
    <div class="section-title-news">
        <h1 class="mb-4" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000"><b class="text-black underline-2">Media Partner</b></h1>
    </div>
    <div class="row">
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
<svg id="wave" class="mt-5" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 150" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(62, 101.981, 243, 1)" offset="0%"></stop><stop stop-color="rgba(11, 197.143, 255, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,90L34.3,95C68.6,100,137,110,206,105C274.3,100,343,80,411,62.5C480,45,549,30,617,30C685.7,30,754,45,823,62.5C891.4,80,960,100,1029,107.5C1097.1,115,1166,110,1234,95C1302.9,80,1371,55,1440,42.5C1508.6,30,1577,30,1646,47.5C1714.3,65,1783,100,1851,117.5C1920,135,1989,135,2057,130C2125.7,125,2194,115,2263,92.5C2331.4,70,2400,35,2469,27.5C2537.1,20,2606,40,2674,62.5C2742.9,85,2811,110,2880,102.5C2948.6,95,3017,55,3086,40C3154.3,25,3223,35,3291,32.5C3360,30,3429,15,3497,7.5C3565.7,0,3634,0,3703,15C3771.4,30,3840,60,3909,72.5C3977.1,85,4046,80,4114,87.5C4182.9,95,4251,115,4320,110C4388.6,105,4457,75,4526,67.5C4594.3,60,4663,75,4731,77.5C4800,80,4869,70,4903,65L4937.1,60L4937.1,150L4902.9,150C4868.6,150,4800,150,4731,150C4662.9,150,4594,150,4526,150C4457.1,150,4389,150,4320,150C4251.4,150,4183,150,4114,150C4045.7,150,3977,150,3909,150C3840,150,3771,150,3703,150C3634.3,150,3566,150,3497,150C3428.6,150,3360,150,3291,150C3222.9,150,3154,150,3086,150C3017.1,150,2949,150,2880,150C2811.4,150,2743,150,2674,150C2605.7,150,2537,150,2469,150C2400,150,2331,150,2263,150C2194.3,150,2126,150,2057,150C1988.6,150,1920,150,1851,150C1782.9,150,1714,150,1646,150C1577.1,150,1509,150,1440,150C1371.4,150,1303,150,1234,150C1165.7,150,1097,150,1029,150C960,150,891,150,823,150C754.3,150,686,150,617,150C548.6,150,480,150,411,150C342.9,150,274,150,206,150C137.1,150,69,150,34,150L0,150Z"></path></svg>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection