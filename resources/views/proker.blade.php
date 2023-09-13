@extends('layouts.master')

@section('vite')
@vite(['resources/js/app.js', 'resources/js/proker.js', 'resources/css/proker.css'])
@endsection

@section('title', 'WORKPLAN')

@section('content')
<section>
    <div class="page-background position-relative proker">
        <div class="bg-color position-relative">
            <div class="main-title d-flex flex-column justify-content-center align-items-center text-center"
                data-aos="fade-in-out" data-aos-easing="linear" data-aos-duration="2000">
                <h5>ACTION PLAN</h5>
                <h3 class="lh-base">Driving Work Programs</h3>
            </div>
            <div class="container">
                <div class="row ldo pb-5">
                    <div class="col-md-6 order-md-2">
                            <h5 class="sub-judul pb-2" data-aos="fade-left" data-aos-delay="50"
                                data-aos-duration="1000">WORKPLAN</h5>
                        <b>
                            <h2 class="title-proker pb-2" data-aos="fade-left" data-aos-delay="200"
                                data-aos-duration="1000">Basic Organizational Training</h2>
                        </b>
                        <p data-aos="fade-left" data-aos-delay="350" data-aos-duration="1000">Basic training
                             organization is a series of initial activities aimed at
                             prepare
                             new members in an organization. This includes provision regarding values, mission,
                             and organizational structure, as well as the development of social skills required in
                             that environment. By following this training, new members will be better prepared to
                             participate effectively in organizational activities and contribute positively
                             towards a common goal.
                        </p>
                        <div class="position-relative text-center pt-3" data-aos="zoom-out-up" data-aos-delay="50"
                            data-aos-duration="1000">
                            <a href="#" class="btn-selengkapnya">Read More<span><i
                                        class="bi bi-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                            data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/proker/ldo/1.webp" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/ldo/2.webp" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/ldo/3.webp" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row py-5">
                    <div class="col-md-6 order-md-1">
                    <h5 class="sub-judul pb-2" data-aos="fade-right" data-aos-delay="50"
                                data-aos-duration="1000">WORKPLAN</h5>
                        <b>
                            <h2 class="title-proker pb-2" data-aos="fade-right" data-aos-delay="200"
                                data-aos-duration="1000">Code Collaboratively.</h2>
                        </b>
                        <p data-aos="fade-right" data-aos-delay="350" data-aos-duration="1000">The Coding Together activity held on campus is an inspirational platform for students who have an interest in programming. This event not only serves as a platform for sharing knowledge and skills in the coding world but also creates a collaborative environment where innovative ideas can be discussed and transformed into real projects.
                        </p>
                        <div class="position-relative text-center pt-3" data-aos="zoom-out-up" data-aos-delay="50"
                            data-aos-duration="1000">
                            <a href="#" class="btn-selengkapnya">Read More<span><i
                                        class="bi bi-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="500">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                            data-aos="zoom-in" data-aos-delay="100" data-aos-duration="2000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/proker/ngobar/1.webp" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/ngobar/2.webp" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/ngobar/3.webp" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row py-5">
                    <div class="col-md-6 order-md-2">
                    <h5 class="sub-judul pb-2" data-aos="fade-left" data-aos-delay="50"
                                data-aos-duration="1000">WORKPLAN</h5>
                        <b>
                            <h2 class="title-proker pb-2" data-aos="fade-left" data-aos-delay="200"
                                data-aos-duration="1000">Seminars dan Workshops</h2>
                        </b>
                        <p data-aos="fade-left" data-aos-delay="350" data-aos-duration="1000">Seminars and workshops
                             organized by the UKM INSTIKI Developer Club on campus is
                             valuable opportunity for members to absorb the latest technological insights
                             intensive. Through a series of targeted events, participants can deepen their knowledge
                             software development, application programming, as well as the latest trends in the world
                             technology.
                        </p>
                        <div class="position-relative text-center pt-3" data-aos="zoom-out-up" data-aos-delay="50"
                            data-aos-duration="1000">
                            <a href="#" class="btn-selengkapnya">Read More<span><i
                                        class="bi bi-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                            data-aos="zoom-in" data-aos-delay="50" data-aos-duration="2000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/proker/seminar/1.webp" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/seminar/2.webp" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/seminar/3.webp" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row py-5">
                    <div class="col-md-6 order-md-1">
                    <h5 class="sub-judul pb-2" data-aos="fade-right" data-aos-delay="50"
                                data-aos-duration="1000">WORKPLAN</h5>
                        <b>
                            <h2 class="title-proker pb-2" data-aos="fade-right" data-aos-delay="200"
                                data-aos-duration="1000">Community service</h2>
                        </b>
                        <p data-aos="fade-right" data-aos-delay="350" data-aos-duration="1000">In the spirit of devotion
                             in society, the UKM INSTIKI Developer Club takes an active role
                             in helping orphanages as part of his social commitment. We enthusiastically
                             Embrace social responsibility by holding visits and activities together at the orphanage
                             care, providing support in the form of material assistance, meaningful interactions, and holding
                             inspiring educational sessions.
                        </p>
                        <div class="position-relative text-center pt-3" data-aos="zoom-out-up" data-aos-delay="50"
                            data-aos-duration="1000">
                            <a href="#" class="btn-selengkapnya">Read More<span><i
                                        class="bi bi-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="500">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                            data-aos="zoom-in" data-aos-delay="50" data-aos-duration="2000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/proker/pkm/1.webp" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/pkm/2.webp" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/pkm/3.webp" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row py-5">
                    <div class="col-md-6 order-md-2">
                    <h5 class="sub-judul pb-2" data-aos="fade-left" data-aos-delay="50"
                                data-aos-duration="1000">WORKPLAN</h5>
                        <b>
                            <h2 class="title-proker pb-2" data-aos="fade-left" data-aos-delay="200"
                                data-aos-duration="1000">Final Project Showcase</h2>
                        </b>
                        <p data-aos="fade-left" data-aos-delay="350" data-aos-duration="1000">Final Project Event
                             Showcase held internally by UKM INSTIKI Developer Club
                             is the culmination of the members' creative and learning journey. In the atmosphere
                             collaboratively, members show off the final results of projects they have worked on with
                             full of dedication.
                        </p>
                        <div class="position-relative text-center pt-3" data-aos="zoom-out-up" data-aos-delay="50"
                            data-aos-duration="1000">
                            <a href="#" class="btn-selengkapnya">Read More<span><i
                                        class="bi bi-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                            data-aos="zoom-in" data-aos-delay="50" data-aos-duration="2000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/proker/hackaton/1.jpg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/hackaton/2.jpg" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/hackaton/3.jpg" class="d-block w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
