@extends('layouts.master')

@section('vite')
  @vite(['resources/js/app.js', 'resources/js/home.js', 'resources/css/home.css'])
@endsection

@section('title', 'Home Page')


@section('content')

    <section class="header p-0" >
      <div class="hero ukiyo"></div>
      <div class="text-hero container p-0" >
        <h4 data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">INSTIKI DEVELOPER CLUB</h4>
        <h1 class="mt-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">CONNECTING AND INSPIRING STUDENT DEVELOPERS IN THE TECH COMMUNITY</h1>
      </div>
    </section>
    <div class="container p-0">
      <section id="komunitas" >
          <div class="division-head komunitas-head text-center">
            <h5 data-aos="flip-down" data-aos-delay="100" data-aos-duration="1000">COMMUNITY</h5>
            <h3 class="lh-base komunitas-text" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">So far this year, we have invited hundreds of students to join the community</h3>
          </div>
          <div class="py-4 mt-5 square rounded-1 row m-0 border-0 d-flex flex-md-row flex-column" >
              <div class="col kotak-1 d-flex flex-md-row justify-content-center justify-content-md-center" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
                <div class="square m-0 icon-1 d-flex justify-content-center komunitas-icon border-0 me-4 rounded-1">
                  <i class="bi bi-person-fill-check px-4"></i>
                </div>
                <div class="komunitas-item box-text-1">
                  <span class="fs-1 fw-bold">200</span>
                  <p class="m-0">MEMBERS</p>
                </div>
              </div>
              <div class="col kotak-2 d-flex justify-content-center justify-content-md-center" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">
                <div class="square m-0 d-flex justify-content-center komunitas-icon border-0 me-4 rounded-1">
                  <i class="bi bi-person-fill-up px-4"></i>
                </div>
                <div class="komunitas-item box-text-2">
                  <span class="fs-1 fw-bold">230</span>
                  <p class="m-0">GRADUATES</p>
                </div>
              </div>
              <div class="col kotak-3 d-flex flex-md-row justify-content-center justify-content-md-center" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000">
                <div class="square m-0 d-flex justify-content-center komunitas-icon border-0 me-4 rounded-1">
                  <i class="bi bi-calendar3 px-4"></i>
                </div>
                <div class="komunitas-item box-text-3">
                  <span class="fs-1 fw-bold">5+</span>
                  <p class="m-0">YEARS</p>
                </div>
              </div>
          </div>
      </section>

      <section class="box-ref row gap-4 align-items-center m-0 marsec d-flex flex-column-reverse flex-md-row">
        <div class="col p-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
          <div class="division-head" >
            <h5>WHAT IS IDC?</h5>
            <h3 class="lh-base">INSTIKI DEVELOPER CLUB</h3>
            <p class="mb-5 lh-lg">Get to know Instiki Developer Club through its vision and mission.</p>
          </div>
          <div>
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-visi-tab" data-bs-toggle="tab" data-bs-target="#visi" type="button" role="tab" aria-controls="visi" aria-selected="true">Vision</button>
                <button class="nav-link" id="nav-misi-tab" data-bs-toggle="tab" data-bs-target="#misi" type="button" role="tab" aria-controls="misi" aria-selected="false">Mission</button>
              </div>
            </nav>
            <div class="tab-content mt-4" id="nav-tabContent">
              <div class="tab-pane fade show active" id="visi" role="tabpanel" aria-labelledby="nav-visi-tab" tabindex="0">
              To be the main forum for INSTIKI students to develop skills and creativity in the field of software development. We aim to create a community focused on self-development, where our members can share knowledge and experiences to grow into quality developers.
              </div>
              <div class="tab-pane fade" id="misi" role="tabpanel" aria-labelledby="nav-misi-tab" tabindex="0">
                <ul class="list-unstyled">
                  <li class="mb-3 d-flex">
                    <span class="me-2">📌</span>
                    <span>Gather and leverage the knowledge and skills of our members to share, collaborate and grow together.</span>
                  </li>
                  <li class="mb-3 d-flex">
                    <span class="me-2">📌</span>
                    <span>Organizing activities such as workshops, seminars and collaborative projects to increase the technical knowledge of IDC members.</span>
                  </li>
                  <li class="mb-3 d-flex">
                    <span class="me-2">📌</span>
                    <span>Encourage collaboration and exchange of ideas between IDC members and other INSTIKI students.</span>
                  </li>
                  <li class="mb-3 d-flex">
                    <span class="me-2">📌</span>
                    <span>Provides easy access to the latest resources and learning materials in the field of software development.</span>
                  </li>
                  <li class="d-flex">
                    <span class="me-2">📌</span>
                    <span>Build strong relationships with the developer community outside of campus to expand your network and insight.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col box-img" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
          <div class="d-flex justify-content-center align-items-center"><img src="./img/home/it.webp" alt=""></div>
        </div>
      </section>


      <section class="box-ref row me-0 ms-0 gap-4 mb-5 align-items-center marsec d-flex flex-md-row flex-column">
        <div class="col box-img" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
          <div class="d-flex justify-content-center align-items-center"><img src="./img/home/it1.webp" alt=""></div>
        </div>
        <div class="col p-0"  >
          <div class="division-head" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
            <h5>DIVISION</h5>
            <h3 class="lh-base">Composed by divisions that are relevant to industry needs</h3>
            <p class="mb-5 lh-lg">Find a division that suits your field and talent interests.</p>
          </div>
          <div class="division-list">
            <div class="py-3 px-4 square rounded-1 d-flex" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1000">
              <div class="me-3 d-flex justify-content-center align-items-center"><i class="bi bi-browser-chrome"></i></div>
              <p class="m-0">Web Development</p>
            </div>
          </div>
          <div class="division-list">
            <div class="py-3 px-4 square rounded-1 d-flex" data-aos="flip-up" data-aos-delay="350" data-aos-duration="1000">
              <div class="me-3 d-flex justify-content-center align-items-center"><i class="bi bi-phone-fill"></i></div>
              <p class="m-0">Mobile Development</p>
            </div>
          </div>
          <div class="division-list">
            <div class="py-3 px-4 square rounded-1 d-flex" data-aos="flip-up" data-aos-delay="450" data-aos-duration="1000">
              <div class="me-3 d-flex justify-content-center align-items-center"><i class="bi bi-pc-display-horizontal"></i></div>
              <p class="m-0">UI/UX Design</p>
            </div>
          </div>
          <div class="division-list">
            <div class="py-3 px-4 square rounded-1 d-flex" data-aos="flip-up" data-aos-delay="650" data-aos-duration="1000">
              <div class="me-3 d-flex justify-content-center align-items-center"><i class="bi bi-robot"></i></div>
              <p class="m-0">Data Science</p>
            </div>
          </div>
        </div>
      </section>

      <section class="mb-5 marsec d-flex flex-column align-items-center justify-content-center">
        <div class="division-head text-center w-50">
          <h5 data-aos="flip-down" data-aos-delay="200" data-aos-duration="1000">LATEST NEWS</h5>
          <h3 class="lh-base mb-5" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">A collection of the latest articles with informative, educational and current news.</h3>
        </div>
        <div class="row owl-carousel owl-theme position-relative p-1">
          <div class="me-3 d-flex justify-content-center item" style="width:400px" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
            <div class="card m-0 w-100 overflow-hidden" >
              <div class="overflow-hidden img-card">
                <img src="img/news/Hari-Kartini.webp" class="card-img-top object-fit-cover" alt="...">
              </div>
              <div class="card-body px-4 pb-5">
                <p class="card-date">02 FEBRUARY 2023</p>
                <h3 class="card-title text-white">Kartini Day 2023</h3>
                <p class="card-text">Kartini Day, observed on April 21st in Indonesia, commemorates the legacy of Raden Ajeng Kartini, a pioneer in the women's emancipation movement in Indonesia.</p>
              </div>
            </div>
          </div>
          <div class="me-3 d-flex justify-content-center item" style="width:400px" data-aos="fade-down" data-aos-delay="400" data-aos-duration="1000">
            <div class="card m-0 w-100 overflow-hidden">
              <div class="overflow-hidden img-card">
                <img src="img/news/Hackfest 2023.webp" class="card-img-top object-fit-cover" alt="...">
              </div>
              <div class="card-body px-4 pb-5">
                <p class="card-date">18 MARCH 2023</p>
                <h3 class="card-title text-white">Hackfest 2023</h3>
                <p class="card-text">Hackfest by Google is an exciting event that brings together innovators, developers, and tech enthusiasts to collaborate and create innovative solutions.</p>
              </div>
            </div>
          </div>
          <div class="me-3 d-flex justify-content-center item" style="width:400px" data-aos="fade-down" data-aos-delay="600" data-aos-duration="1000">
            <div class="card m-0 w-100 overflow-hidden">
              <div class="overflow-hidden img-card">
                <img src="img/news/AMA with TechConnect.webp" class="card-img-top object-fit-cover" alt="...">
              </div>
              <div class="card-body px-4 pb-5">
                <p class="card-date">11 MEI 2023</p>
                <h3 class="card-title text-white">AMA With Techconnect</h3>
                <p class="card-text">The "AMA with Techconnect" seminar on tips for a career as a front-end developer is an informative and engaging event designed to provide valuable insights.</p>
              </div>
            </div>
          </div>
          <div class=" me-3 d-flex justify-content-center item" style="width:400px" data-aos="fade-down" data-aos-delay="800" data-aos-duration="1000">
            <div class="card m-0 w-100 overflow-hidden">
              <div class="overflow-hidden img-card">
                <img src="img/news/Hari-Raya-Jumat-Agung.webp" class="card-img-top object-fit-cover" alt="...">
              </div>
              <div class="card-body px-4 pb-5">
                <p class="card-date">7 APRIL 2023</p>
                <h3 class="card-title text-white">The Good Friday</h3>
                <p class="card-text">Good Friday, also known as Holy Friday, is a Christian holiday that remembers the crucifixion of Jesus Christ. It falls on the Friday before Easter Sunday</p>
              </div>
            </div>
          </div>
          <div class="align-items-center">
            <div class="next item d-flex flex-column justify-content-center align-items-center" style="width:200px">
                <i class="bi bi-arrow-right-circle-fill fs-1 lengkap"></i>
                <a href="{{ url('news') }}" class="text-white lengkap">See More.</a>
            </div>
          </div>
        </div>
      </section>

      <section class="gallery-section px-3 mb-5 marsec d-flex flex-column align-items-center justify-content-center">
        <div class="division-head text-center w-50"">
          <h5 data-aos="flip-down" data-aos-delay="200" data-aos-duration="1000">ACTIVITY</h5>
          <h3 class="lh-base mb-5" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">Footage of exciting activities with members.</h3>
          <!-- <p class="mb-5 lh-lg">Just tell us your repetitive problem or the primitive method used today, and we will create a digital solution.</p> -->
        </div>

        <div class="gallery">
            <div class="gallery-item n1-stretch" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1100">
                <img src="img/about/IMG_1.webp" alt="">
                <div class="image-info text-center">
                    <h3>Coding Training for Kids</h3>
                    <p class="date-taken">8 January 2023</p>
                    <p class="description">Fun coding training program to inspire kids in technology.</p>
                </div>
            </div>
            
            <div class="gallery-item v-stretch" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1100">
                <img src="img/about/IMG_2.webp" alt="">
                <div class="image-info text-center">
                    <h3>Innovation Hackathon</h3>
                    <p class="date-taken">19 June 2023</p>
                    <p class="description">We host an annual hackathon that encourages developers to collaborate and create innovative solutions to real-world problems.</p>
                </div>
            </div>
    
            <div class="gallery-item n2-stretch" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1200">
                <img src="img/about/IMG_3.webp" alt="">
                <div class="image-info text-center">
                    <h3>AI and Machine Learning Training</h3>
                    <p class="date-taken">16 July 2023</p>
                    <p class="description">Intensive training in AI and machine learning.</p>
                </div>
            </div>
    
            <div class="gallery-item nv-stretch" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">
                <img src="img/about/IMG_4.webp" alt="">
                <div class="image-info text-center">
                    <h3>Web Programming Projects</h3>
                    <p class="date-taken">28 December 2023</p>
                    <p class="description">Creative web project development.</p>
                </div>
            </div>
    
            <div class="gallery-item nh-stretch" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                <img src="img/about/IMG_5.webp" alt="">
                <div class="image-info text-center">
                    <h3>Health Hackathon</h3>
                    <p class="date-taken">31 December 2023</p>
                    <p class="description">Hackathon focuses on health technology.</p>
                </div>
            </div>

            <div class="gallery-item h-stretch" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                <img src="img/about/IMG_6.webp" alt="">
                <div class="image-info text-center">
                    <h3>Field Trips to Technology Companies</h3>
                    <p class="date-taken">1 January 2022</p>
                    <p class="description">IDC organizes field trips to leading technology companies to provide insight into the technology industry.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="mb-5 marsec recruitment" >
      <div class="row justify-content-between d-flex align-items-center flex-md-row flex-sm-column">
        <div class="col-sm-12 col-md-6">
          <div class="division-head" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
            <h3 class="lh-base">CRITICISM AND SUGGESTIONS</h3>
            <p class="lh-lg">Provide your criticism and suggestions for better development of IDC in the future.</p>
            <p class="icon" data-aos="fade-right" data-aos-delay="150" data-aos-duration="1000">>>></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <form action="">  
          <div class="form-floating mb-3" data-aos="fade-left" data-aos-delay="150" data-aos-duration="1000">
            <input type="text" class="form-control box-form" id="floatingInput" placeholder="Name">
            <label for="floatingInput" class="text-black-50">Name</label>
        </div>

          <div class="form-floating mb-3" data-aos="fade-left" data-aos-delay="350" data-aos-duration="1000">
            <input type="email" class="form-control box-form" id="floatingPassword" placeholder="Email">
            <label for="floatingPassword" class="text-black-50">Email</label>
          </div>
          <div class="form-floating mb-3" data-aos="fade-left" data-aos-delay="550" data-aos-duration="1000">
            <textarea style="height: 200px;" class="form-control box-form" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea" class="text-black-50">Comments</label>
          </div>
          <button class="py-2 px-5 join rounded-2 btn btn-default fw-medium text-white" data-aos="fade-left" data-aos-delay="750" data-aos-duration="1000">Submit</button>
          </form>
        </div>
      </div>
    </section>

    <section class="marsec d-flex flex-column align-items-center justify-content-center partner" >
        <div class="division-head text-center w-50">
          <h5 data-aos="flip-down" data-aos-delay="200" data-aos-duration="1000">PARTNER</h5>
          <h3 class="lh-base" data-aos="fade-up" data-aos-delay="350" data-aos-duration="1000">Behold! Our story is sought-after.</h3>
          <p class="mb-5 lh-lg" data-aos="fade-up" data-aos-delay="350" data-aos-duration="1000">Big tech companies have decided to empower our cause by enhancing the full potential of our students.</p>
        </div>
        <div class="row d-flex flex-md-row flex-sm-column">
          <div class="col" data-aos="fade-right" data-aos-delay="150" data-aos-duration="1000">
            <img src="img/home/instiki.webp" alt="" width="200px">
          </div>
          <div class="col" data-aos="fade-up" data-aos-delay="450" data-aos-duration="1000">
            <img src="img/home/gdsc.webp" alt="" width="200px">
          </div>
          <div class="col" data-aos="fade-left" data-aos-delay="150" data-aos-duration="1000">
            <img src="img/home/kampus_merdeka.webp" alt="" width="150px">
          </div>
        </div>
    </section>
  
      <!-- <section class="partner">
        <div class="paroller">
          <h1>PARTNER • PARTNER • PARTNER </h1>
          <h1>PARTNER • PARTNER • PARTNER • PARTNER • PARTNER • PARTNER • PARTNER </h1>
        </div>
      </section> -->
    </div>

@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection

