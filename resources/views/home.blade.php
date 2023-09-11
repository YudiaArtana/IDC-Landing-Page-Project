@extends('layouts.master')

@section('vite')
  @vite(['resources/js/app.js', 'resources/js/home.js', 'resources/css/home.css'])
@endsection

@section('title', 'Home Page')


@section('content')

    <section class="header p-0">
      <div class="hero ukiyo"></div>
      <div class="text-hero container p-0">
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
            <h5>APA ITU IDC?</h5>
            <h3 class="lh-base">INSTIKI DEVELOPER CLUB</h3>
            <p class="mb-5 lh-lg">Just tell us your repetitive problem or the primitive method used today, and we will create a digital solution.</p>
          </div>
          <div>
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-visi-tab" data-bs-toggle="tab" data-bs-target="#visi" type="button" role="tab" aria-controls="visi" aria-selected="true">Visi</button>
                <button class="nav-link" id="nav-misi-tab" data-bs-toggle="tab" data-bs-target="#misi" type="button" role="tab" aria-controls="misi" aria-selected="false">Misi</button>
              </div>
            </nav>
            <div class="tab-content mt-4" id="nav-tabContent">
              <div class="tab-pane fade show active" id="visi" role="tabpanel" aria-labelledby="nav-visi-tab" tabindex="0">
                Menjadi wadah utama bagi mahasiswa INSTIKI dalam mengembangkan keterampilan dan kreativitas di bidang pengembangan perangkat lunak. Kami bertujuan untuk menciptakan komunitas yang berfokus pada pengembangan diri, di mana anggota kami dapat saling berbagi pengetahuan dan pengalaman untuk tumbuh menjadi developer yang berkualitas.
              </div>
              <div class="tab-pane fade" id="misi" role="tabpanel" aria-labelledby="nav-misi-tab" tabindex="0">
                <ul class="list-unstyled">
                  <li class="mb-3 d-flex">
                    <span class="me-2">📌</span>
                    <span>Mengumpulkan dan memanfaatkan pengetahuan serta keterampilan anggota kami untuk saling berbagi, berkolaborasi, dan tumbuh bersama.</span>
                  </li>
                  <li class="mb-3 d-flex">
                    <span class="me-2">📌</span>
                    <span>Mengadakan kegiatan seperti workshop, seminar, dan proyek kolaboratif untuk meningkatkan pengetahuan teknis anggota IDC.</span>
                  </li>
                  <li class="mb-3 d-flex">
                    <span class="me-2">📌</span>
                    <span>Mendorong kolaborasi dan pertukaran ide antara anggota IDC dan mahasiswa INSTIKI lainnya.</span>
                  </li>
                  <li class="mb-3 d-flex">
                    <span class="me-2">📌</span>
                    <span>Menyediakan akses mudah ke sumber daya dan materi pembelajaran terkini di bidang pengembangan perangkat lunak.</span>
                  </li>
                  <li class="d-flex">
                    <span class="me-2">📌</span>
                    <span>Membangun hubungan yang kuat dengan komunitas developer di luar kampus untuk memperluas jaringan dan wawasan.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
        <div class="d-flex justify-content-center align-items-center"><img src="./img/divisi.svg" alt=""></div>
        </div>
      </section>

      <section class="row gap-4 mb-5 align-items-center marsec">
        <div class="col">
          <div class="d-flex justify-content-center align-items-center"><img src="./img/divisi.svg" alt=""></div>
        </div>
        <div class="col p-0">
          <div class="division-head">
            <h5>DIVISION</h5>
            <h3 class="lh-base">Create solutions to repetitive problems, design applications and access anywhere!</h3>
            <p class="mb-5 lh-lg">Just tell us your repetitive problem or the primitive method used today, and we will create a digital solution.</p>
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
      </section>

      <section class="mb-5 marsec d-flex flex-column align-items-center justify-content-center">
        <div class="division-head text-center w-50">
          <h5>BERITA TERKINI</h5>
          <h3 class="lh-base">Create solutions to repetitive problems, design applications and access anywhere!</h3>
          <p class="mb-5 lh-lg">Just tell us your repetitive problem or the primitive method used today, and we will create a digital solution.</p>
        </div>
        <div class="row owl-carousel owl-theme position-relative p-1">
          <div class="me-3 d-flex justify-content-center item" style="width:400px">
            <div class="card m-0 w-100 overflow-hidden">
              <div class="overflow-hidden img-card">
                <img src="img/news/Hari-Kartini.webp" class="card-img-top object-fit-cover" alt="...">
              </div>
              <div class="card-body px-4 pb-5">
                <p class="card-date">02 FEBRUARY 2023</p>
                <h3 class="card-title text-white">Hari Kartini 2023</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="me-3 d-flex justify-content-center item" style="width:400px">
            <div class="card m-0 w-100 overflow-hidden">
              <div class="overflow-hidden img-card">
                <img src="img/news/Hackfest 2023.webp" class="card-img-top object-fit-cover" alt="...">
              </div>
              <div class="card-body px-4 pb-5">
                <p class="card-date">02 FEBRUARY 2023</p>
                <h3 class="card-title text-white">Hari Kartini 2023</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="me-3 d-flex justify-content-center item" style="width:400px">
            <div class="card m-0 w-100 overflow-hidden">
              <div class="overflow-hidden img-card">
                <img src="img/news/AMA with TechConnect.webp" class="card-img-top object-fit-cover" alt="...">
              </div>
              <div class="card-body px-4 pb-5">
                <p class="card-date">02 FEBRUARY 2023</p>
                <h3 class="card-title text-white">Hari Kartini 2023</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class=" me-3 d-flex justify-content-center item" style="width:400px">
            <div class="card m-0 w-100 overflow-hidden">
              <div class="overflow-hidden img-card">
                <img src="img/news/Hari-Raya-Jumat-Agung.webp" class="card-img-top object-fit-cover" alt="...">
              </div>
              <div class="card-body px-4 pb-5">
                <p class="card-date">02 FEBRUARY 2023</p>
                <h3 class="card-title text-white">Hari Kartini 2023</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="align-items-center">
            <div class="next item d-flex flex-column justify-content-center align-items-center" style="width:200px">
                <i class="bi bi-arrow-right-circle-fill fs-1"></i>
                <a href="{{ url('news') }}" class="text-white">Selengkapnya</a>
            </div>
          </div>
        </div>
      </section>

      <section class="gallery-section px-3">

        <div class="gallery">
            <div class="gallery-item n1-stretch" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                <img src="img/about/IMG_1.webp" alt="">
                <div class="image-info text-center">
                    <h3>Pelatihan Koding untuk Anak-Anak</h3>
                    <p class="date-taken">10 September 2023</p>
                    <p class="description">Program pelatihan koding menyenangkan untuk menginspirasi anak-anak di bidang teknologi.</p>
                </div>
            </div>
            
            <div class="gallery-item v-stretch" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1100">
                <img src="img/about/IMG_2.webp" alt="">
                <div class="image-info text-center">
                    <h3>Hackathon Inovasi</h3>
                    <p class="date-taken">10 September 2023</p>
                    <p class="description">Kami menggelar hackathon tahunan yang mendorong para pengembang untuk berkolaborasi dan menciptakan solusi inovatif untuk masalah dunia nyata.</p>
                </div>
            </div>
    
            <div class="gallery-item n2-stretch" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1200">
                <img src="img/about/IMG_3.webp" alt="">
                <div class="image-info text-center">
                    <h3>Pelatihan AI dan Machine Learning</h3>
                    <p class="date-taken">10 September 2023</p>
                    <p class="description">Pelatihan intensif dalam AI dan machine learning.</p>
                </div>
            </div>
    
            <div class="gallery-item nv-stretch" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">
                <img src="img/about/IMG_4.webp" alt="">
                <div class="image-info text-center">
                    <h3>Proyek Pemrograman Web</h3>
                    <p class="date-taken">10 September 2023</p>
                    <p class="description">Pengembangan proyek web kreatif.</p>
                </div>
            </div>
    
            <div class="gallery-item nh-stretch" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                <img src="img/about/IMG_5.webp" alt="">
                <div class="image-info text-center">
                    <h3>Hackathon Kesehatan</h3>
                    <p class="date-taken">10 September 2023</p>
                    <p class="description">Hackathon fokus pada teknologi kesehatan.</p>
                </div>
            </div>

            <div class="gallery-item h-stretch" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">
                <img src="img/about/IMG_6.webp" alt="">
                <div class="image-info text-center">
                    <h3>Kunjungan Lapangan ke Perusahaan Teknologi</h3>
                    <p class="date-taken">10 September 2023</p>
                    <p class="description">IDC mengatur kunjungan lapangan ke perusahaan-perusahaan teknologi terkemuka untuk memberikan wawasan tentang industri teknologi.</p>
                </div>
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

