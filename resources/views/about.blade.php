@extends('layouts.master')


@section('vite')
@vite(['resources/js/app.js', 'resources/js/about.js', 'resources/css/about.css'])
@endsection

@section('title', 'Tentang Kami')

@section('content')
    <div class="container pt-5">
        <section class="about-us">

            <div class="text-about text-center pb-5 mx-auto" data-aos="fade-up" data-aos-delay="50" data-aos-duration="500">
                <h5 class="mt-5">ABOUT US</h5>
                <h3>History of INSTIKI Developer Club</h3>
                <p class="mx-auto">
                Let's explore the interesting journey of the Instiki Developer Club through a series of key points that make up this innovative community. From the roots to the peak of collaboration, let's take a look at how IDC has grown into what we know today.
                </p>
            </div>

            <div id="timeline-area" class="mt-5">
                <div class="timeline">
                    <div class="row" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                        <div class="col-md">
                            <h5>2010</h5>
                            <p class="sub-timeline">Establishment and Development of Hardware and Software Organizations</p>
                        </div>
                        <div class="col-md" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1200">
                            <p>In its early years, the Instiki Developer Club (IDC) emerged as a forum consisting of a group of Instiki students who had a deep desire to explore the world of software development. Initially known as the Hardware & Software Student Activity Unit (UKM), this group unites students with the same interest: becoming a developer. With an unstoppable spirit of togetherness, this group has transformed into a community that not only builds technology, but also brotherhood.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline">
                    <div class="row" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                        <div class="col-md">
                            <h5>2022</h5>
                            <p class="sub-timeline">Transformation into Instiki Developer Club</p>
                        </div>
                        <div class="col-md" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1200">
                            <p>In early 2022, this community underwent major changes with the name changing to Instiki Developer Club (IDC). This change is in line with the development of the group's vision and mission. The new name symbolizes a collaborative spirit in the face of the ever-changing world of software development. IDC is increasingly known as a center for students who are hungry for knowledge, ready to understand and master the world of coding, and apply their creativity in meaningful projects.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="timeline pb-5">
                    <div class="row" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1000">
                        <div class="col-md">
                            <h5>2023</h5>
                            <p class="sub-timeline">Merge with GDSC Chapter INSTIKI</p>
                        </div>
                        <div class="col-md" data-aos="fade-left" data-aos-delay="50" data-aos-duration="1200">
                            <p>Moving towards 2023, fate increasingly connects IDC's footprint with another group that is in line, namely the Google Developer Student Club (GDSC) Instiki. These two entities merge into one, creating a strong synergy between software development and modern technology learning. This merger brings more opportunities, events and collaborative projects to members, allowing them to learn from a variety of resources and expand their networks. With total members now reaching 100 people, this group is becoming increasingly dynamic, striving to produce innovation and have a positive impact on the campus community.
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
                    <h3 class="w-75">General Questions</h3>
                    <p>Find frequently asked questions about IDC</p>
                    <button class="btn btn-custom">Submit Your Inquiry</button>
                </div>

                <div class="col-7" data-aos="fade-left" data-aos-delay="250" data-aos-duration="1200">

                    <div class="faqs mb-4">
                        
                        <div class="question">
                            <h3>When does coding together take place?</h3>

                            <svg width="15" height="10" viewbox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                            </svg>
                
                        </div>

                        <div class="answer">
                            <p>Coding activities with the Instiki Developer Club are usually carried out on weekends (if there are no obstacles).</p>
                        </div>

                    </div>

                    <div class="faqs mb-4">

                        <div class="question">
                            <h3>How many SKP points do you have when attending an IDC national seminar?</h3>

                            <svg width="15" height="10" viewbox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                            </svg>
                
                        </div>

                        <div class="answer">
                            <p>For every seminar held by the Instiki Developer Club, you get 20 SKP points.</p>
                        </div>

                    </div>

                    <div class="faqs mb-4">

                        <div class="question">
                            <h3>What are the benefits of joining GDSC Chapter INSTIKI?</h3>

                            <svg width="15" height="10" viewbox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                            </svg>
                
                        </div>

                        <div class="answer">
                            <p>The benefits that can be obtained from joining the Google Developer Students Club are knowledge and relationships. </p>
                        </div>

                    </div>
                    <div class="faqs mb-4">

                        <div class="question">
                            <h3>Does IDC always hold competitions?</h3>

                            <svg width="15" height="10" viewbox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                            </svg>
                
                        </div>

                        <div class="answer">
                            <p>For our competition, the Instiki Developer Club will definitely hold a competition like a mini hackaton. We also accept invitations to competitions related to developers from other campuses.</p>
                        </div>

                    </div>
                    <div class="faqs mb-4">

                        <div class="question">
                            <h3>Do you have to be good at coding to join IDC?</h3>

                            <svg width="15" height="10" viewbox="0 0 42 25">
                                <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round"/>
                            </svg>
                
                        </div>

                        <div class="answer">
                            <p>No, because the Instiki Developer Club doesn't look at whether you are good at coding or not. But more about sharing knowledge and experience in technology</p>
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
