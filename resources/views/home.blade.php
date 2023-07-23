@extends('layouts.master')

@section('vite')
  @vite(['resources/js/app.js', 'resources/js/home.js', 'resources/css/home.css'])
@endsection

@section('title', 'Home Page')


@section('content')
<div class="page-background position-relative">
  <div class="bg-color position-relative">
    <section class="header p-0">
      <div class="hero ukiyo"></div>
      <div class="text-hero m-0 container position-absolute p-0">
        <h4>INSTIKI DEVELOPER CLUB</h4>
        <h1 class="mt-2">CONNECTING AND INSPIRING STUDENT DEVELOPERS IN THE TECH COMMUNITY</h1>
      </div>
    </section>
    <div class="container">
      <section id="komunitas">
          <div class="division-head komunitas-head text-center">
            <h5>KOMUNITAS</h5>
            <h3 class="lh-base komunitas-text">Hingga tahun ini, kami telah mengajak ratusan mahasiswa bergabung pada komunitas</h3>
          </div>
          <div class="py-4 mt-5 square rounded-1 row border-0">
              <div class="col d-flex justify-content-center border-end border-light border-opacity-10">
                <div class="square m-0 d-flex justify-content-center komunitas-icon border-0 me-4 rounded-1">
                  <i class="bi bi-person-fill-check px-4"></i>
                </div>
                <div class="komunitas-item">
                  <span class="fs-1 fw-bold">200</span>
                  <p class="m-0">ANGGOTA</p>
                </div>
              </div>
              <div class="col d-flex justify-content-center border-end border-light border-opacity-10">
                <div class="square m-0 d-flex justify-content-center komunitas-icon border-0 me-4 rounded-1">
                  <i class="bi bi-person-fill-up px-4"></i>
                </div>
                <div class="komunitas-item">
                  <span class="fs-1 fw-bold">230</span>
                  <p class="m-0">ALUMNI</p>
                </div>
              </div>
              <div class="col d-flex justify-content-center">
                <div class="square m-0 d-flex justify-content-center komunitas-icon border-0 me-4 rounded-1">
                  <i class="bi bi-calendar3 px-4"></i>
                </div>
                <div class="komunitas-item">
                  <span class="fs-1 fw-bold">5+</span>
                  <p class="m-0">TAHUN</p>
                </div>
              </div>
          </div>
      </section>
      <section class="row gap-4 align-items-center">
        <div class="col p-0">
          <div class="division-head">
            <h5>DIVISION</h5>
            <h3 class="lh-base">Create solutions to repetitive problems, design applications and access anywhere!</h3>
            <p class="mt-4 mb-5 lh-lg">Just tell us your repetitive problem or the primitive method used today, and we will create a digital solution.</p>
          </div>
          <div class="division-list">
            <div class="py-3 px-4 square rounded-1 d-flex">
              <div class="me-3 d-flex justify-content-center align-items-center"><i class="bi bi-browser-chrome"></i></div>
              <p class="m-0">Web Development</p>
            </div>
          </div>
          <div class="division-list">
            <div class="py-3 px-4 square rounded-1 d-flex">
              <div class="me-3 d-flex justify-content-center align-items-center"><i class="bi bi-phone-fill"></i></div>
              <p class="m-0">Mobile Apps Development</p>
            </div>
          </div>
          <div class="division-list">
            <div class="py-3 px-4 square rounded-1 d-flex">
              <div class="me-3 d-flex justify-content-center align-items-center"><i class="bi bi-pc-display-horizontal"></i></div>
              <p class="m-0">UI/UX Design</p>
            </div>
          </div>
          <div class="division-list">
            <div class="py-3 px-4 square rounded-1 d-flex">
              <div class="me-3 d-flex justify-content-center align-items-center"><i class="bi bi-robot"></i></div>
              <p class="m-0">Machine Learning</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="d-flex justify-content-center align-items-center"><img src="./img/divisi.svg" alt=""></div>
        </div>
      </section>
      <section class="row gap-4 align-items-center">
        <div class="col">

        </div>
        <div class="col p-0">
          <div class="division-head">
            <h5>DIVISION</h5>
            <h3 class="lh-base">Create solutions to repetitive problems, design applications and access anywhere!</h3>
            <p class="mt-4 mb-5 lh-lg">Just tell us your repetitive problem or the primitive method used today, and we will create a digital solution.</p>
          </div>
        </div>
      </section>

      <section>
      <div class="paroller">Awesome element with parallax effect</div>
      </section>
    </div>
  </div>
</div>

@endsection

@section('js')

@endsection

