@extends('layouts.master')

@section('vite')
@vite(['resources/js/app.js', 'resources/js/proker.js', 'resources/css/proker.css'])
@endsection

@section('title', 'Program Kerja')

@section('content')
<section>
    <div class="page-background position-relative proker">
        <div class="bg-color position-relative">
            <div class="main-title d-flex flex-column justify-content-center align-items-center text-center"
                data-aos="fade-in-out" data-aos-easing="linear" data-aos-duration="1500">
                <h5 style="color: #ED1F24;">RENCANA AKSI</h5>
                <h3 class="lh-base">Menggerakkan Program Kerja</h3>
                <p class="mb-5 lh-lg opacity-50 w-75">Dalam upaya kami untuk mencapai keunggulan dalam dunia
                    pengembangan, Instiki Developer Club memandang pentingnya sebuah 'Rencana Aksi' yang mampu memandu
                    langkah-langkah kami. Rencana ini bukan sekadar dokumen, melainkan komitmen kami untuk menggerakkan
                    Program Kerja dengan tekad yang kuat. </p>
            </div>
            <div class="container">
                <div class="row ldo pb-5">
                    <div class="col-md-6 order-md-2">
                        <b>
                            <h5 class="sub-judul pb-2" data-aos="fade-left" data-aos-delay="50"
                                data-aos-duration="1000">PROGRAM KERJA</h5>
                        </b>
                        <b>
                            <h2 class="title-proker pb-2" data-aos="fade-left" data-aos-delay="200"
                                data-aos-duration="1000">Latihan Dasar Organisasi</h2>
                        </b>
                        <p data-aos="fade-left" data-aos-delay="350" data-aos-duration="1000">Latihan dasar
                            organisasi adalah serangkaian kegiatan awal yang bertujuan untuk
                            mempersiapkan
                            anggota baru dalam sebuah organisasi. Ini meliputi pembekalan mengenai nilai-nilai, misi,
                            dan struktur organisasi, serta pengembangan keterampilan sosial yang diperlukan dalam
                            lingkungan tersebut. Dengan mengikuti latihan ini, anggota baru akan lebih siap untuk
                            berpartisipasi secara efektif dalam aktivitas organisasi dan berkontribusi secara positif
                            terhadap tujuan bersama.
                        </p>
                        <p data-aos="fade-left" data-aos-delay="350" data-aos-duration="1000">Selama latihan dasar
                            organisasi, peserta diberikan wawasan tentang sejarah dan latar belakang
                            organisasi, tanggung jawab individu dalam tim, komunikasi yang efektif, serta cara
                            pengambilan keputusan dalam struktur hierarki.</p>
                        <a href="#" class="btn-selengkapnya" data-aos="zoom-in" data-aos-delay="100"
                            data-aos-duration="1200">Selengkapnya<span><i class="bi bi-arrow-right"></i></span></a>
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
                        <b>
                            <h5 class="sub-judul pb-2" data-aos="fade-right" data-aos-delay="50"
                                data-aos-duration="1000">PROGRAM KERJA</h5>
                        </b>
                        <b>
                            <h2 class="title-proker pb-2" data-aos="fade-right" data-aos-delay="200"
                                data-aos-duration="1000">Ngobar</h2>
                        </b>
                        <p data-aos="fade-right" data-aos-delay="350" data-aos-duration="1000">Kegiatan Ngoding Bareng
                            yang diadakan di kampus adalah wadah inspiratif bagi para mahasiswa
                            yang memiliki minat dalam pemrograman. Acara ini tidak hanya menjadi platform untuk berbagi
                            pengetahuan dan keterampilan dalam dunia pengkodean, tetapi juga menciptakan lingkungan
                            kolaboratif di mana ide-ide inovatif dapat diperbincangkan dan diwujudkan menjadi proyek
                            nyata.
                        </p>
                        <p data-aos="fade-right" data-aos-delay="350" data-aos-duration="1000">Ngoding Bareng menjadi
                            ruang yang memperkaya wawasan teknis, membangun jaringan
                            profesional, dan menghidupkan semangat kolaborasi di antara para calon pengembang yang
                            bersemangat.</p>
                        <a href="#" class="btn-selengkapnya" data-aos="zoom-in" data-aos-delay="100"
                            data-aos-duration="1200">Selengkapnya<span><i class="bi bi-arrow-right"></i></span></a>
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
                        <b>
                            <h5 class="sub-judul pb-2" data-aos="fade-left" data-aos-delay="50"
                                data-aos-duration="1000">PROGRAM KERJA</h5>
                        </b>
                        <b>
                            <h2 class="title-proker pb-2" data-aos="fade-left" data-aos-delay="200"
                                data-aos-duration="1000">Seminar dan Workshop</h2>
                        </b>
                        <p data-aos="fade-left" data-aos-delay="350" data-aos-duration="1000">Seminar dan workshop yang
                            diselenggarakan oleh UKM INSTIKI Developer Club di kampus adalah
                            kesempatan berharga bagi para anggota untuk meresapi wawasan teknologi terkini secara
                            intensif. Melalui serangkaian acara yang terarah, peserta dapat mendalamipengetahuan dalam
                            pengembangan perangkat lunak, pemrograman aplikasi, serta tren terkini dalam dunia
                            teknologi.
                        </p>
                        <p data-aos="fade-left" data-aos-delay="350" data-aos-duration="1000">Ini adalah peluang ideal
                            untuk mengejar kreativitas, mengasah keterampilan, dan mendapatkan
                            wawasan tentang tren perkembangan teknologi masa depan, yang semuanya memperkaya pengalaman
                            serta pengetahuan para peserta.</p>
                        <a href="#" class="btn-selengkapnya" data-aos="zoom-in" data-aos-delay="100"
                            data-aos-duration="1200">Selengkapnya<span><i class="bi bi-arrow-right"></i></span></a>
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
                        <b>
                            <h5 class="sub-judul pb-2" data-aos="fade-right" data-aos-delay="50"
                                data-aos-duration="1000">PROGRAM KERJA</h5>
                        </b>
                        <b>
                            <h2 class="title-proker pb-2" data-aos="fade-right" data-aos-delay="200"
                                data-aos-duration="1000">Pengabdian Kepada Masyarakat</h2>
                        </b>
                        <p data-aos="fade-right" data-aos-delay="350" data-aos-duration="1000">Dalam semangat pengabdian
                            pada masyarakat, UKM INSTIKI Developer Club mengambil peran aktif
                            dalam membantu panti asuhan sebagai bagian dari komitmen sosialnya. Kami dengan antusias
                            merangkul tanggung jawab sosial dengan mengadakan kunjungan dan kegiatan bersama di panti
                            asuhan, memberikan dukungan berupa bantuan materi, interaksi yang bermakna, serta menggelar
                            sesi edukatif yang menginspirasi.
                        </p>
                        <p data-aos="fade-right" data-aos-delay="350" data-aos-duration="1000">Ini adalah wujud nyata
                            dari dedikasi kami untuk memberikan dampak positif dan menciptakan
                            ikatan empati dengan masyarakat di sekitar, sambil memupuk semangat gotong royong dan
                            kepedulian bersama.</p>
                        <a href="#" class="btn-selengkapnya" data-aos="zoom-in" data-aos-delay="100"
                            data-aos-duration="1200">Selengkapnya<span><i class="bi bi-arrow-right"></i></span></a>
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
                        <b>
                            <h5 class="sub-judul pb-2" data-aos="fade-left" data-aos-delay="50"
                                data-aos-duration="1000">PROGRAM KERJA</h5>
                        </b>
                        <b>
                            <h2 class="title-proker pb-2" data-aos="fade-left" data-aos-delay="200"
                                data-aos-duration="1000">Final Project Showcase</h2>
                        </b>
                        <p data-aos="fade-left" data-aos-delay="350" data-aos-duration="1000">Acara Final Project
                            Showcase yang diadakan secara internal oleh UKM INSTIKI Developer Club
                            merupakan puncak dari perjalanan kreatifitas dan pembelajaran anggota. Dalam suasana
                            kolaboratif, anggota memamerkan hasil akhir proyek-proyek yang telah mereka kerjakan dengan
                            penuh dedikasi.
                        </p>
                        <p data-aos="fade-left" data-aos-delay="350" data-aos-duration="1000">Showcase ini menjadi
                            platform untuk berbagi ide inovatif, pemecahan masalah teknis, serta
                            menginspirasi satu sama lain melalui perkembangan perangkat lunak dan aplikasi yang
                            diciptakan.</p>
                        <a href="#" class="btn-selengkapnya" data-aos="zoom-in" data-aos-delay="100"
                            data-aos-duration="1200">Selengkapnya<span><i class="bi bi-arrow-right"></i></span></a>
                    </div>
                    <div class="col-md-6 order-md-1">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel"
                            data-aos="zoom-in" data-aos-delay="50" data-aos-duration="2000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/proker/hackaton/1.webp" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/hackaton/2.webp" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/proker/hackaton/3.webp" class="d-block w-100">
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
