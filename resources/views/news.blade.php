@extends('layouts.master')

@section('vite')
    @vite(['resources/js/app.js', 'resources/js/news.js', 'resources/css/news.css', 'resources/sass/news.scss'])
@endsection

@section('title', 'News')

@section('content')
<div id="main-hero-news-1">
    <div class="container hero-news">
        <div class="row d-flex flex-column align-items-center justify-content-center pt-5">
            <div class="d-flex flex-column align-items-center justify-content-center pt-5 p-0">
                <div class="division-head d-flex flex-column align-items-center justify-content-center text-center w-50" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000">
                    <h5>LATEST NEWS</h5>
                    <h2 class="lh-base">Create solutions to repetitive problems, design applications and access anywhere!</h2>
                    <p class="mb-5 lh-lg opacity-50">Just tell us your repetitive problem or the primitive method used today, and we will create a digital solution.</p>
                </div>
            </div>
            <div class="row">
                <div class="headline-card-1 col-sm-12 col-md-6 col-lg-6 p-0 m-0" data-aos="fade-right" data-aos-delay="50" data-aos-duration="2000">
                    <div class="card-news-1">
                        <div class="col box-text-category-1 ps-5 pb-0 d-flex align-items-end">
                            <p class="text-category-1">Web Development</p>
                        </div>
                        <h2 class="box-text-category-1 p-5 pt-0">Improving User Experience Through Responsiveness and Speed</h2>
                    </div>
                </div>
                <div class="headline-card-2 col-sm-12 col-md-6 col-lg-6" data-aos="fade-left" data-aos-delay="50" data-aos-duration="2000">
                    <div class="row">
                        <div class="headline-data-science col-12 mb-3 pe-0">
                            <div class="card-news-2">
                                <div class="col box-text-category-2 ps-5 pb-0 d-flex align-items-end">
                                    <p class="text-category-2">Data Science</p>
                                </div>
                                <h4 class="box-text-category-2 p-5 pt-0" style="font-family: 'Figtree', sans-serif;">Extracting Valuable Insights from Big Data</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="headline-blockchain col-6 pe-0">
                            <div class="card-news-3">
                                <div class="col box-text-category-3 ps-5 pb-0 d-flex align-items-end">
                                    <p class="text-category-3">Blockchain</p>
                                </div>
                                <h5 class="box-text-category-3 p-5 pt-0" style="font-family: 'Figtree', sans-serif;">Innovative Data Security Paradigm</h5>
                            </div>
                        </div>
                        <div class="headline-IoT col-6 pe-0">
                            <div class="card-news-4">
                                <div class="col box-text-category-4 ps-5 pb-0 d-flex align-items-end">
                                    <p class="text-category-4">IoT</p>
                                </div>
                                <h5 class="box-text-category-5 p-5 pt-0" style="font-family: 'Figtree', sans-serif;">New Challenges in the Connected Era</h5>
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
                <h3 class="text-center position-relative mb-4" data-aos="zoom-in-up" data-aos-delay="50" data-aos-duration="1000"><b class="underline-1">NEWS HIGHLIGHT</b></h3>
                <div class="slider" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000">
                    <div class="owl-carousel">
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/news/AMA with TechConnect.webp" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b class="title-slider-card" style="font-family: 'Figtree', sans-serif;">AMA with TechConnect</b></h5>
                            <p class="text-slider-card text-center p-0 opacity-50" style="font-family: 'Figtree', sans-serif;">Tue, 09 May 2023</p>
                            <p class="text-slider-card text-center p-4 pt-0" style="font-family: 'Figtree', sans-serif;">Satisfy all your curiosities in the Ask Me Anything (AMA) session with TechConnect, coming up this Thursday on May 11th 2023!</p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/news/Webinar-1.webp" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b class="title-slider-card" style="font-family: 'Figtree', sans-serif;">TechConnect Sandbox 2023 Webinar</b></h5>
                            <p class="text-slider-card text-center p-0 opacity-50" style="font-family: 'Figtree', sans-serif;">Fri, 28 April 2023</p>
                            <p class="text-slider-card text-center p-4 pt-0" style="font-family: 'Figtree', sans-serif;">Don't miss the opportunity to showcase your potential at TechConnect Sandbox 2023!</p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/news/Seminar-1.webp" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b class="title-slider-card" style="font-family: 'Figtree', sans-serif;">National Seminar</b></h5>
                            <p class="text-slider-card text-center p-0 opacity-50" style="font-family: 'Figtree', sans-serif;">Sat, 04 February 2023</p>
                            <p class="text-slider-card text-center p-4 pt-0" style="font-family: 'Figtree', sans-serif;">Are you ready to become a Website Developer? We are from INSTIKI Developer Club, INSTIKI Student Activity Unit.</p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/news/pengabdian-kepada-masyarakat.webp" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b class="title-slider-card" style="font-family: 'Figtree', sans-serif;">Community Service</b></h5>
                            <p class="text-slider-card text-center p-0 opacity-50" style="font-family: 'Figtree', sans-serif;">Tue, 11 July 2023</p>
                            <p class="text-slider-card text-center p-4 pt-0" style="font-family: 'Figtree', sans-serif;">The INSTIKI Developer Club community moved to the Tat Twam Asi foundation, an orphanage located on Jl. Jaya Giri IX no. 6 Denpasar.</p>
                        </div>
                        <div class="slider-card">
                            <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="img/news/Hackfest 2023.webp" alt="">
                            </div>
                            <h5 class="mb-0 text-center"><b class="title-slider-card" style="font-family: 'Figtree', sans-serif;">Hackfest 2023</b></h5>
                            <p class="text-slider-card text-center p-0 opacity-50" style="font-family: 'Figtree', sans-serif;">Wed, 08 February 2023</p>
                            <p class="text-slider-card text-center p-4 pt-0" style="font-family: 'Figtree', sans-serif;">Good news! We've extended the registration deadline for our upcoming HackFest</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="container section border border-0">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
            <div class="mb-4 mt-4">
                <div class="section-title-news">
                    <h3 class="mb-4" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000"><b class="underline-3" style="font-family: 'Figtree', sans-serif;">Latest</b></h3>
                </div>
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/pengabdian-kepada-masyarakat.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                            <a href="https://www.instagram.com/p/CuiW4N9PYtQ/" class="trending-title" style="font-family: 'Kanit', sans-serif;">
                                Community Service
                            </a>
                        </h5>
                        <small style="font-family: 'Figtree', sans-serif;">11 July, 2023</small>
                        <p class="summary pt-3" style="font-family: 'Figtree', sans-serif;">The INSTIKI Developer Club community is heading towards the Tat Twam Asi foundation, an orphanage located at Jl. Jaya Giri IX no. 6, Denpasar. We are here to visit and share love with these extraordinary children. Today, we opened a donation box, called for kindness, and shared happiness with them. Together, we can make a big difference in their lives!.</p>
                    </div>
                </div>
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Raya-Idul-Fitri.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CrS6c8XPIg4/" class="trending-title" style="font-family: 'Kanit', sans-serif;">
                            Happy Eid al-Fitr
                        </a>
                        </h5>
                        <small style="font-family: 'Figtree', sans-serif;">21 April, 2023</small>
                        <p class="summary pt-3" style="font-family: 'Figtree', sans-serif;">Happy Eid al-Fitr 2023. May we all be happy and peaceful on this festive day.</p>
                    </div>
                </div>
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Kartini.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CrQ7xyhvk-H/" class="trending-title" style="font-family: 'Kanit', sans-serif;">
                            Happy Kartini Day
                        </a>
                        </h5>
                        <small style="font-family: 'Figtree', sans-serif;">21 April, 2023</small>
                        <p class="summary pt-3" style="font-family: 'Figtree', sans-serif;">The challenges in life come and go, but believe that 'After Darkness Comes Light.' Happy Kartini Day.</p>
                    </div>
                </div>
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Raya-Jumat-Agung.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CquF4bMP9tb/" class="trending-title" style="font-family: 'Kanit', sans-serif;">
                            The Good Friday
                        </a>
                        </h5>
                        <small style="font-family: 'Figtree', sans-serif;">7 April, 2023</small>
                        <p class="summary pt-3" style="font-family: 'Figtree', sans-serif;">All Members of the Instiki Developer Club (IDC) would like to say, Happy Good Friday, praying that the Lord embraces you in His love and blesses you with His grace on this Holy Day.</p>
                    </div>
                </div>
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Tech-Talk-Thursday-1.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CqSsTMJPnK1/" class="trending-title" style="font-family: 'Kanit', sans-serif;">
                            Tech Talk Thursday: Managing Risk In A Risky World
                        </a>
                        </h5>
                        <small style="font-family: 'Figtree', sans-serif;">27 March, 2023</small>
                        <p class="summary pt-3" style="font-family: 'Figtree', sans-serif;">Another new episode of Tech Talk Thursday is here. And we’re going to talk about "Managing Risk in a Risky World".</p>
                    </div>
                </div>
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Puasa-1.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CqIjP4nv1JG/" class="trending-title" style="font-family: 'Kanit', sans-serif;">
                            Happy Ramadan
                        </a>
                        </h5>
                        <small style="font-family: 'Figtree', sans-serif;">23 March, 2023</small>
                        <p class="summary pt-3" style="font-family: 'Figtree', sans-serif;">We, the members of IDC (Instiki Developer Club), would like to extend our congratulations on celebrating the Holy Month of Victory. May you always be able to perform your worship smoothly and without hindrance.</p>
                    </div>
                </div>
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Dokumentasi-Seminar-1.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CptfuOnPdTA/?img_index=1" class="trending-title" style="font-family: 'Kanit', sans-serif;">
                            National Seminar Documentation: Developing Skills For Becoming a Web Developer
                        </a>
                        </h5>
                        <small style="font-family: 'Figtree', sans-serif;">13 March, 2023</small>
                        <p class="summary pt-3" style="font-family: 'Figtree', sans-serif;">Hello INSTIKI Devs👋 Let's take a look at the precious moments from the INSTIKI Developer Club National Seminar with the theme 'Develop Skills for Becoming a Web Developer'! This event successfully helped participants broaden their horizons and enhance their skills in the field of web development. Thank you to all the speakers and participants who joined this seminar.</p>
                    </div>
                </div>
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Raya-Nyepi.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CqCa-6vPQnB/?img_index=1" class="trending-title" style="font-family: 'Kanit', sans-serif;">
                            Happy Nyepi Day, New Year Saka 1945
                        </a>
                        </h5>
                        <small style="font-family: 'Figtree', sans-serif;">21 March, 2023</small>
                        <p class="summary pt-3" style="font-family: 'Figtree', sans-serif;">"Nyepi Day is a sacred day for all Hindus, a time to release anger, grudges, and other negative traits. Let's cultivate an attitude of optimism and spirit." We, from the IDC Student Association, wish you a happy Nyepi Day in 2023, may we remain strong in observing the Catur Brata Penyepian (Four Nyepi Prohibitions) and always be in good health 🙏🙏🙏.</p>
                    </div>
                </div>
                <div class="terbaru-content row mb-3" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Seminar-1.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <h5>
                        <a href="https://www.instagram.com/p/CoNT9qsP_Wd/" class="trending-title" style="font-family: 'Kanit', sans-serif;">
                            National Seminar: Developing Skills For Becoming a Web Developer
                        </a>
                        </h5>
                        <small style="font-family: 'Figtree', sans-serif;">04 February, 2023</small>
                        <p class="summary pt-3" style="font-family: 'Figtree', sans-serif;">"With direct mentoring by Prabu Rangki, a Software Engineer at Kintell from the Google Developer Group. So, what are you waiting for, guys? Come and join us, and enjoy our event! 🔥🔥 Get your new experience 🔥🔥 With training from extraordinary speakers, you can get it at an affordable price!".</p>
                    </div>
                </div>
                <div class="position-relative text-center pt-3 btn-wadah" data-aos="zoom-out-up" data-aos-delay="50" data-aos-duration="1000">
                    <a href="#" class="btn-selengkapnya float-end">Read More<span><i class="bi bi-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
            <div class="trending mt-4">
                <div class="section-title-news"  data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <h3 class="mb-4"><b class="underline-4" style="font-family: 'Figtree', sans-serif;">Popular</b></h3>
                </div>
                <div class="trending-content row border border-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Dokumentasi-Seminar-1.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <a href="https://www.instagram.com/p/CoNT9qsP_Wd/" class="trending-title" style="font-family: 'Figtree', sans-serif;">
                            National Seminar Documentation: Developing Skills For Becoming a Web Developer
                        </a>
                    </div>
                </div>
                <div class="trending-content row border border-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Seminar-1.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <a href="https://www.instagram.com/p/CoNT9qsP_Wd/" class="trending-title" style="font-family: 'Figtree', sans-serif;">
                            National Seminar: Developing Skills For Becoming a Web Developer
                        </a>
                    </div>
                </div>
                <div class="trending-content row border border-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/AMA with TechConnect.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <a href="https://www.instagram.com/p/CsBjWWXPcOs/" class="trending-title" style="font-family: 'Figtree', sans-serif;">
                        Ask Me Anything (AMA) with TechConnect
                        </a>
                    </div>
                </div>
                <div class="trending-content row border border-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Raya-Jumat-Agung.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <a href="https://www.instagram.com/p/CquF4bMP9tb/" class="trending-title" style="font-family: 'Figtree', sans-serif;">
                            The Good Friday
                        </a>
                    </div>
                </div>
                <div class="trending-content row border border-0" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <img class="thumb" src="img/news/Hari-Raya-Nyepi.webp">
                    </div>
                    <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                        <a href="https://www.instagram.com/p/CqCa-6vPQnB/?img_index=1" class="trending-title" style="font-family: 'Figtree', sans-serif;">
                            Happy Nyepi Day, New Year Saka 1945
                        </a>
                    </div>
                </div>
                <div class="pt-2 pb-3">
                    <div class="section-title-news" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                        <h3 class="mb-4 mt-4"><b class="underline-5" style="font-family: 'Figtree', sans-serif;">Follow Us</b></h3>
                    </div>
                    <div class="sosmed-container">
                        <div class="d-flex mb-3">
                            <a href="" class="sosmed d-block w-50 py-2 px-3 text-decoration-none me-2" style="background: #0185AE;" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                                <small class="fab fa-linkedin-in me-2 text-light"></small><small class="text-light" style="font-family: 'Figtree', sans-serif;">12,345 Connects</small>
                            </a>
                            <a href="" class="sosmed d-block w-50 py-2 px-3 text-decoration-none ms-2" style="background: #C8359D;" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1200">
                                <small class="fab fa-instagram me-2 text-light"></small><small class="text-light" style="font-family: 'Figtree', sans-serif;">7,890 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3 text-light">
                            <a href="" class="sosmed d-block w-50 py-2 px-3 text-decoration-none me-2" style="background: #39569E;" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1400">
                                <small class="fab fa-facebook-f me-2 text-light"></small><small class="text-light" style="font-family: 'Figtree', sans-serif;">4,567 Fans</small>
                            </a>
                            <a href="" class="sosmed d-block w-50 py-2 px-3 text-decoration-none ms-2" style="background: #52AAF4;" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1600">
                                <small class="fab fa-twitter me-2 text-light"></small><small class="text-light" style="font-family: 'Figtree', sans-serif;">2,385 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="sosmed d-block w-50 py-2 px-3 text-decoration-none me-2" style="background: #DC472E;" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1800">
                                <small class="fab fa-youtube me-2 text-light"></small><small class="text-light" style="font-family: 'Figtree', sans-serif;">8,901 Subscribers</small>
                            </a>
                            <a href="" class="sosmed d-block w-50 py-2 px-3 text-decoration-none ms-2" style="background: #202b49;" data-aos="fade-left" data-aos-delay="50" data-aos-duration="2000">
                                <small class="fab fa-github me-2 text-light"></small><small class="text-light" style="font-family: 'Figtree', sans-serif;">4,938 Followers</small>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="pb-3">
                    <div class="section-title-news" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                        <h1 class="mb-4 mt-4"><b class="underline-6" style="font-family: 'Figtree', sans-serif;">Tags</b></h1>
                    </div>
                    <div class="tags" data-aos="zoom-in-up" data-aos-delay="50" data-aos-duration="1000" style="font-family: 'Figtree', sans-serif;">
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
                        <h3 class="mb-4 mt-4"><b class="underline-6" style="font-family: 'Figtree', sans-serif;">Newsletter</b></h3>
                    </div>
                    <div class="newsletter">
                        <div class="bg-dark text-center p-4 mb-3" data-aos="zoom-in-up" data-aos-delay="50" data-aos-duration="1000" style="font-family: 'Figtree', sans-serif;">
                            <p>Get the latest news delivered directly to your inbox. Subscribe to our newsletter for the latest information.</p>
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" placeholder="Your email address">
                                </div>
                                <div class="form-group d-flex flex-column align-items-center justify-content-center text-center pt-3">
                                    <button class="py-2 px-5 join btn-berlangganan rounded-2 btn btn-default fw-small text-white">Subscribe</button>
                                </div>
                            </form>
                            <small class="mt-2 d-block">By subscribing, you agree to our privacy policy.</small>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>
<div class="container section mt-4 border border-0">
    <div class="section-title-news">
        <h3 class="mb-4" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000"><b class="underline-2" style="font-family: 'Figtree', sans-serif;">Media Partner</b></h3>
    </div>
    <div class="row text-center" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
        <div class="slider-partner">
            <div class="slide-track">
                <div class="slide">
                    <img src="img/news/bem-instiki.webp" height="100%" width="100" alt="" />
                </div>
                <div class="slide">
                    <img src="img/news/inspiration-dance-instiki.webp" height="100%" width="100" alt="" />
                </div>
                <div class="slide">
                    <img src="img/news/hima-ti-instiki.webp" height="100%" width="100" alt="" />
                </div>
                <div class="slide">
                    <img src="img/news/info-bali-news.webp" height="100%" width="100" alt="" />
                </div>
                <div class="slide">
                    <img src="img/news/badminton.webp" height="100%" width="100" alt="" />
                </div>
                <div class="slide">
                    <img src="img/news/ecsi.webp" height="100%" width="100" alt="" />
                </div>
                <div class="slide">
                    <img src="img/news/bodybuilder.webp" height="100%" width="100" alt="" />
                </div>
                <div class="slide">
                    <img src="img/news/himask.webp" height="100%" width="100" alt="" />
                </div>
                <div class="slide">
                    <img src="img/news/gradasi.webp" height="100%" width="100" alt="" />
                </div>
                <div class="slide">
                    <img src="img/news/himabd.webp" height="100%" width="100" alt="" />
                </div>
                <div class="slide">
                    <img src="img/news/esport.webp" height="100%" width="100" alt="" />
                </div>
                <div class="slide">
                    <img src="img/news/islam.webp" height="100%" width="100" alt="" />
                </div>
                <div class="slide">
                    <img src="img/news/ksr.webp" height="100%" width="100" alt="" />
                </div>
                <div class="slide">
                    <img src="img/news/kmh.webp" height="100%" width="100" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection