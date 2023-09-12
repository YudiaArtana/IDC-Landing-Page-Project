@extends('layouts.master')


@section('vite')
@vite(['resources/js/app.js', 'resources/js/about.js', 'resources/css/about.css'])
@endsection

@section('title', 'Tentang Kami')

@section('content')
    <div class="container pt-5">
        <section class="about-us">

            <div class="text-about text-center pb-5 mx-auto" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500">
                <h5 class="mt-5">TENTANG KAMI</h5>
                <h3>Sejarah INSTIKI Developer Club</h3>
                <p class="mx-auto">
                    Mari kita telusuri perjalanan menarik Instiki Developer Club melalui serangkaian titik penting yang membentuk komunitas inovatif ini. Dari akar hingga puncak kolaborasi, mari kita lihat bagaimana IDC telah tumbuh menjadi apa yang kita kenal hari ini.
                </p>
            </div>

            <div id="timeline-area" class="mt-5">
                <div class="timeline">
                    <div class="row" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                        <div class="col-md">
                            <h5> Tahun 2010</h5>
                            <p class="sub-timeline">Pendirian dan Perkembangan IDC</p>
                        </div>
                        <div class="col-md" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1200">
                            <p>Pada tahun-tahun awalnya, Instiki Developer Club (IDC) muncul sebagai suatu wadah yang terdiri dari sekelompok mahasiswa Instiki yang memiliki hasrat mendalam untuk menjelajahi dunia pengembangan perangkat lunak. Awalnya dikenal sebagai Unit Kegiatan Mahasiswa (UKM) Hardware & Software, kelompok ini menyatukan mahasiswa dengan minat yang sama: menjadi seorang developer. Dengan semangat kebersamaan yang tak terbendung, kelompok ini menjelma menjadi suatu komunitas yang tak hanya membangun teknologi, tetapi juga persaudaraan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline">
                    <div class="row" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                        <div class="col-md">
                            <h5> Tahun 2022</h5>
                            <p class="sub-timeline">Transformasi Menjadi Instiki Developer Club</p>
                        </div>
                        <div class="col-md" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1200">
                            <p>Pada awal tahun 2022, komunitas ini mengalami perubahan besar dengan pergantian nama menjadi Instiki Developer Club (IDC). Perubahan ini seiring dengan semakin berkembangnya visi dan misi kelompok ini. Nama baru ini melambangkan semangat kolaboratif dalam menghadapi dunia pengembangan perangkat lunak yang terus berubah. IDC semakin dikenal sebagai pusat bagi para mahasiswa yang haus akan ilmu, siap untuk memahami dan menguasai dunia coding, serta menerapkan kreativitas mereka dalam proyek-proyek berarti.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline pb-5">
                    <div class="row" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                        <div class="col-md">
                            <h5> Tahun 2023</h5>
                            <p class="sub-timeline">Bergabung dengan GDSC Instiki</p>
                        </div>
                        <div class="col-md" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1200">
                            <p>Melangkah menuju tahun 2023, takdir semakin menghubungkan jejak IDC dengan kelompok lain yang sejalan, yaitu Google Developer Student Club (GDSC) Instiki. Dua entitas ini melebur menjadi satu, menciptakan sinergi yang kuat antara pengembangan perangkat lunak dan pembelajaran teknologi modern. Penggabungan ini menghadirkan lebih banyak peluang, acara, dan proyek kolaboratif untuk anggota, memungkinkan mereka untuk belajar dari berbagai sumber daya dan memperluas jaringan mereka. Dengan total anggota yang kini mencapai 100 orang, kelompok ini menjadi semakin dinamis, berupaya menghasilkan inovasi dan memberi dampak positif dalam komunitas kampus.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="faq px-3">
            <div class="row  row-faq d-flex flex-row  justify-content-center">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 faq-head mb-5" data-aos="fade-left" data-aos-delay="250" data-aos-duration="1000">

                    <h5>FAQs</h5>
                    <h3 class="w-75">Pertanyaan Umum</h3>
                    <p>Temukan pertanyaan-pertanyaan umum seputar IDC</p>
                    <button class="btn btn-custom">Kirim Pertanyaan Anda</button>
                </div>

                <div class="col-7" data-aos="fade-left" data-aos-delay="250" data-aos-duration="1200">

                    <div class="faqs mb-4">
                        
                        <div class="question">
                            <h3>Kapan saja ngoding bareng dilaksanakan?</h3>

                            <svg width="15" height="10" viewbox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                            </svg>
                
                        </div>

                        <div class="answer">
                            <p>Untuk kegiatan ngoding bareng Instiki Developer Club biasanya dilakukan pada weekend (jika tidak ada halangan).</p>
                        </div>

                    </div>

                    <div class="faqs mb-4">

                        <div class="question">
                            <h3>Berapa point skp saat mengikuti seminar nasional IDC?</h3>

                            <svg width="15" height="10" viewbox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                            </svg>
                
                        </div>

                        <div class="answer">
                            <p>Untuk setiap seminar yang diadakan Instiki Developer Club mendapatkan 20 point skp.</p>
                        </div>

                    </div>

                    <div class="faqs mb-4">

                        <div class="question">
                            <h3>Apa keuntungan mengikuti GDSC Instiki?</h3>

                            <svg width="15" height="10" viewbox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                            </svg>
                
                        </div>

                        <div class="answer">
                            <p>Keuntungan yang bisa didapat dari mengikuti Google Developer Club Instiki ilmu dan juga relasi. </p>
                        </div>

                    </div>
                    <div class="faqs mb-4">

                        <div class="question">
                            <h3>Apakah IDC selalu mengadakan lomba?</h3>

                            <svg width="15" height="10" viewbox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                            </svg>
                
                        </div>

                        <div class="answer">
                            <p>Untuk lomba kami dari Instiki Developer Club pasti akan mengadakan lomba seperti mini hackaton. Kami juga menerima undangan lomba yang berhubungan dengan developer dari kampus-kampus lainnya.</p>
                        </div>

                    </div>
                    <div class="faqs mb-4">

                        <div class="question">
                            <h3>Apakah masuk IDC harus pintar ngoding?</h3>

                            <svg width="15" height="10" viewbox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                            </svg>
                
                        </div>

                        <div class="answer">
                            <p>Tidak, karena di Instiki Developer Club tidak memandang jago atau tidaknya dalam mengcoding. Tetapi lebih </p>
                        </div>

                    </div>

                </div>
            </div>
        </section>

    </div>

<script>

    const faqidc = document.querySelectorAll(".faqs");

    faqidc.forEach((faqs) => {
        faqs.addEventListener ("click", () => {
            faqs.classList.toggle("active");
        });
    });

</script>

@endsection
