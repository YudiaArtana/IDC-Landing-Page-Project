@extends('layouts.master')

@section('vite')
    @vite(['resources/js/app.js', 'resources/js/news.js', 'resources/css/news.css', 'resources/sass/news.scss'])
@endsection

@section('title', 'Berita')

@section('content')
<div id="main-hero-news-1">
    <div class="container hero-news">
        <div class="row d-flex flex-column align-items-center justify-content-center pt-5">
            <div class="d-flex flex-column align-items-center justify-content-center pt-5 p-0">
                <div class="division-head d-flex flex-column align-items-center justify-content-center text-center w-50" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="3000">
                    <h5>BERITA TERKINI</h5>
                    <h3 class="lh-base">Create solutions to repetitive problems, design applications and access anywhere!</h3>
                    <p class="mb-5 lh-lg opacity-50">Just tell us your repetitive problem or the primitive method used today, and we will create a digital solution.</p>
                </div>
            </div>
            <div class="row">
                <div class="headline-card-1 col-sm-12 col-md-6 col-lg-6 p-0 m-0" data-aos="fade-right" data-aos-delay="50" data-aos-duration="2000">
                    <div class="card-news-1">
                        <div class="col box-text-category-1 ps-5 pb-0 d-flex align-items-end">
                            <p class="text-category-1">Web Development</p>
                        </div>
                        <h2 class="box-text-category-1 p-5 pt-0">Meningkatkan Pengalaman Pengguna Melalui Responsif dan Kecepatan</h2>
                    </div>
                </div>
                <div class="headline-card-2 col-sm-12 col-md-6 col-lg-6" data-aos="fade-left" data-aos-delay="50" data-aos-duration="2000">
                    <div class="row">
                        <div class="headline-data-science col-12 mb-3 pe-0">
                            <div class="card-news-2">
                                <div class="col box-text-category-2 ps-5 pb-0 d-flex align-items-end">
                                    <p class="text-category-2">Data Science</p>
                                </div>
                                <h4 class="box-text-category-2 p-5 pt-0">Menggali Wawasan Berharga dari Data Besar</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="headline-blockchain col-6 pe-0">
                            <div class="card-news-3">
                                <div class="col box-text-category-3 ps-5 pb-0 d-flex align-items-end">
                                    <p class="text-category-3">Blockchain</p>
                                </div>
                                <h5 class="box-text-category-3 p-5 pt-0">Inovasi Paradigma Keamanan Data</h5>
                            </div>
                        </div>
                        <div class="headline-IoT col-6 pe-0">
                            <div class="card-news-4">
                                <div class="col box-text-category-4 ps-5 pb-0 d-flex align-items-end">
                                    <p class="text-category-4">IoT</p>
                                </div>
                                <h5 class="box-text-category-4 p-5 pt-0">Tantangan Baru dalam Era Terhubung</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="main-hero-news-1">
    <div class="container hero-news">
        <section id="slider">
            <div class="container">
                <h1 class="text-center position-relative mb-4" data-aos="zoom-in-up" data-aos-delay="50" data-aos-duration="1000"><b class="underline-1">BERITA SEKILAS</b></h1>
                <div class="slider" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000">
                    <div class="owl-carousel">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/news/AMA with TechConnect.webp" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b class="title-slider-card">AMA with TechConnect</b></h5>
                            <p class="text-slider-card text-center p-0 opacity-50">Tue, 09 May 2023</p>
                            <p class="text-slider-card text-center p-4 pt-0">Satisfy all your curiosities in the Ask Me Anything (AMA) session with TechConnect, coming up this Thursday on May 11th 2023!</p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/news/Webinar-1.webp" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b class="title-slider-card">Webinar TechConnect Sandbox 2023</b></h5>
                            <p class="text-slider-card text-center p-0 opacity-50">Fri, 28 April 2023</p>
                            <p class="text-slider-card text-center p-4 pt-0">Jangan lewatkan kesempatan untuk memperlihatkan potensimu di TechConnect Sandbox 2023!</p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/news/Seminar-1.webp" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b class="title-slider-card">Seminar Nasional</b></h5>
                            <p class="text-slider-card text-center p-0 opacity-50">Sat, 04 February 2023</p>
                            <p class="text-slider-card text-center p-4 pt-0">Sudah siap menjadi seorang Website Developer? Kami dari INSTIKI Developer Club, Unit Kegiatan Mahasiswa INSTIKI.</p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/news/pengabdian-kepada-masyarakat.webp" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b class="title-slider-card">Pengabdian Kepada Masyarakat</b></h5>
                            <p class="text-slider-card text-center p-0 opacity-50">Tue, 11 July 2023</p>
                            <p class="text-slider-card text-center p-4 pt-0">Komunitas INSTIKI Developer Club bergerak menuju yayasan Tat Twam Asi, panti asuhan yang terletak di Jl. Jaya Giri IX no. 6 Denpasar.</p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/news/Hackfest 2023.webp" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b class="title-slider-card">Hackfest 2023</b></h5>
                            <p class="text-slider-card text-center p-0 opacity-50">Wed, 8 February 2023</p>
                            <p class="text-slider-card text-center p-4 pt-0">Good news! We've extended the registration deadline for our upcoming HackFest</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="container section border border-0">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="mb-4 mt-4">
                <div class="section-title-news">
                    <h1 class="mb-4" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000"><b class="underline-3">Terbaru</b></h1>
                </div>
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/pengabdian-kepada-masyarakat.webp">
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
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Raya-Idul-Fitri.webp">
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
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Kartini.webp">
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
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Raya-Jumat-Agung.webp">
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
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Tech-Talk-Thursday-1.webp">
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
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Puasa-1.webp">
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
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Dokumentasi-Seminar-1.webp">
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
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Raya-Nyepi.webp">
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
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Seminar-1.webp">
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
                <div class="position-relative text-center pt-3" data-aos="zoom-out-up" data-aos-delay="50" data-aos-duration="1000">
                    <a href="#" class="btn-selengkapnya float-end">Selengkapnya<span><i class="bi bi-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="trending mt-4">
                <div class="section-title-news"  data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <h1 class="mb-4"><b class="underline-4">Populer</b></h1>
                </div>
                <div class="trending-content row border border-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Dokumentasi-Seminar-1.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <a href="https://www.instagram.com/p/CoNT9qsP_Wd/" class="trending-title">
                        Dokumentasi Seminar Nasional: Developing Skills For Becoming a Web Developer
                        </a>
                    </div>
                </div>
                <div class="trending-content row border border-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Seminar-1.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <a href="https://www.instagram.com/p/CoNT9qsP_Wd/" class="trending-title">
                        Seminar Nasional: Developing Skills For Becoming a Web Developer
                        </a>
                    </div>
                </div>
                <div class="trending-content row border border-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/AMA with TechConnect.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <a href="https://www.instagram.com/p/CsBjWWXPcOs/" class="trending-title">
                        Ask Me Anything (AMA) with TechConnect
                        </a>
                    </div>
                </div>
                <div class="trending-content row border border-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Raya-Jumat-Agung.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <a href="https://www.instagram.com/p/CquF4bMP9tb/" class="trending-title">
                        Memperingati Wafatnya Isa Al-masi
                        </a>
                    </div>
                </div>
                <div class="trending-content row border border-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Raya-Nyepi.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <a href="https://www.instagram.com/p/CqCa-6vPQnB/?img_index=1" class="trending-title">
                        Selamat Hari Raya Nyepi Tahun Baru Saka 1945
                        </a>
                    </div>
                </div>
                <div class="pt-2 pb-3">
                    <div class="section-title-news" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                        <h1 class="mb-4 mt-4"><b class="underline-5">Follow Us</b></h1>
                    </div>
                    <div class="sosmed-container">
                        <div class="d-flex mb-3">
                            <a href="" class="sosmed d-block w-50 py-2 px-3 text-decoration-none me-2" style="background: #0185AE;" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                                <small class="fab fa-linkedin-in me-2 text-light"></small><small class="text-light">12,345 Connects</small>
                            </a>
                            <a href="" class="sosmed d-block w-50 py-2 px-3 text-decoration-none ms-2" style="background: #C8359D;" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1200">
                                <small class="fab fa-instagram me-2 text-light"></small><small class="text-light">7,890 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3 text-light">
                            <a href="" class="sosmed d-block w-50 py-2 px-3 text-decoration-none me-2" style="background: #39569E;" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1400">
                                <small class="fab fa-facebook-f me-2 text-light"></small><small class="text-light">4,567 Fans</small>
                            </a>
                            <a href="" class="sosmed d-block w-50 py-2 px-3 text-decoration-none ms-2" style="background: #52AAF4;" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1600">
                                <small class="fab fa-twitter me-2 text-light"></small><small class="text-light">2,385 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="sosmed d-block w-50 py-2 px-3 text-decoration-none me-2" style="background: #DC472E;" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1800">
                                <small class="fab fa-youtube me-2 text-light"></small><small class="text-light">8,901 Subscribers</small>
                            </a>
                            <a href="" class="sosmed d-block w-50 py-2 px-3 text-decoration-none ms-2" style="background: #202b49;" data-aos="fade-left" data-aos-delay="50" data-aos-duration="2000">
                                <small class="fab fa-github me-2 text-light"></small><small class="text-light">4,938 Followers</small>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="pb-3">
                    <div class="section-title-news" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                        <h1 class="mb-4 mt-4"><b class="underline-6">Tags</b></h1>
                    </div>
                    <div class="tags" data-aos="zoom-in-up" data-aos-delay="50" data-aos-duration="1000">
                        <a href="#">Machine Learning</a>
                        <a href="#">Python</a>
                        <a href="#">JavaScript</a>
                        <a href="#">Data Science</a>
                        <a href="#">C++</a>
                        <a href="#">Algoritma</a>
                        <a href="#">Cloud Computing</a>
                        <a href="#">Cybersecurity</a>
                        <a href="#">DevOps</a>
                        <a href="#">React</a>
                        <a href="#">Big Data</a>
                        <a href="#">Blockchain</a>
                        <a href="#">Big Data</a>
                        <a href="#">UI/UX Design</a>
                        <a href="#">Kotlin</a>
                        <a href="#">Ruby</a>
                        <a href="#">Flutter</a>
                        <a href="#">PHP</a>
                        <a href="#">Docker</a>
                        <a href="#">Internet of Things (IoT)</a>
                    </div>
                </div>
                <div class="pb-3">
                    <div class="section-title-news" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                        <h1 class="mb-4 mt-4"><b class="underline-6">Newsletter</b></h1>
                    </div>
                    <div class="newsletter">
                        <div class="bg-dark text-center p-4 mb-3" data-aos="zoom-in-up" data-aos-delay="50" data-aos-duration="1000">
                            <p>Dapatkan berita terbaru langsung di inbox Anda. Berlangganan newsletter kami untuk informasi terkini.</p>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" placeholder="Alamat Email Anda">
                                </div>
                                <div class="form-group text-center pt-3">
                                    <button class="py-2 px-5 join rounded-2 btn btn-default fw-small text-white">Berlangganan</button>
                                </div>
                            </form>
                            <small class="mt-2 d-block">Dengan berlangganan, Anda menyetujui kebijakan privasi kami.</small>
                        </div>
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
                <img class="thumb media-partner" src="img/news/bem-instiki.webp">
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3" data-aos="fade-right" data-aos-delay="150" data-aos-duration="1000">
            <div class="mb-2 image image-md">
                <a href="https://www.instagram.com/hima.ti.instiki/">
                <img class="thumb media-partner" src="img/news/hima-ti-instiki.webp">
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3" data-aos="fade-right" data-aos-delay="250" data-aos-duration="1000">
            <div class="mb-2 image image-md">
                <a href="https://www.instagram.com/ins.id_/">
                <img class="thumb media-partner" src="img/news/inspiration-dance-instiki.webp">
                </a>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3 mb-2" data-aos="fade-right" data-aos-delay="350" data-aos-duration="1000">
            <div class="mb-2 image image-md">
                <a href="https://www.instagram.com/infobalinews/">
                <img class="thumb media-partner" src="img/news/info-bali-news.webp">
                </a>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection