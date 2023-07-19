@extends('layouts.master')
@section('title', 'HOME')


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
      <section class="row gap-4 align-items-center">
        <div class="col p-0">
          <div class="division-head">
            <h5>DIVISION</h5>
            <h3 class="lh-base">Create solutions to repetitive problems, design applications and access anywhere!</h3>
            <p class="mt-4 mb-5 lh-lg">Just tell us your repetitive problem or the primitive method used today, and we will create a digital solution.</p>
          </div>
          <div class="division-list">
            <div class="py-3 px-4 square rounded-1 d-flex">
              <div class="me-3">ICON</div>
              <p class="m-0">Web Development</p>
            </div>
          </div>
          <div class="division-list">
            <div class="py-3 px-4 square rounded-1 d-flex">
              <div class="me-3">ICON</div>
              <p class="m-0">Mobile Apps Development</p>
            </div>
          </div>
          <div class="division-list">
            <div class="py-3 px-4 square rounded-1 d-flex">
              <div class="me-3">ICON</div>
              <p class="m-0">UI/UX Design</p>
            </div>
          </div>
          <div class="division-list">
            <div class="py-3 px-4 square rounded-1 d-flex">
              <div class="me-3">ICON</div>
              <p class="m-0">Machine Learning</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="d-flex justify-content-center align-items-center"><img src="./img/divisi.svg" alt=""></div>
        </div>
      </section>
    </div>
  </div>
</div>

@endsection


