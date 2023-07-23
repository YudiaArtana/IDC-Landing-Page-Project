@extends('layouts.master')


@section('vite')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css"
    integrity="sha512-kwJUhJJaTDzGp6VTPBbMQWBFUof6+pv0SM3s8fo+E6XnPmVmtfwENK0vHYup3tsYnqHgRDoBDTJWoq7rnQw2+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@vite(['resources/js/app.js', 'resources/js/about.js', 'resources/css/about.css'])
@endsection

@section('title', 'Tentang Kami')

@section('content')
<div class="about"></div>
<div class="page-background">
    <div class="bg-color">
        <div class="container">
            <section class="gallery-section">
                <div class="gallery">
                  
                    <a href="img/about/IMG_1.jpg">
                        <img src="img/about/IMG_1.jpg" alt="">
                    </a>
                    <a href="img/about/IMG_2.jpg">
                        <img src="img/about/IMG_2.jpg" alt="">
                    </a>
                    <a href="img/about/IMG_3.jpg">
                        <img src="img/about/IMG_3.jpg" alt="">
                    </a>
                    <a href="img/about/IMG_4.jpg">
                        <img src="img/about/IMG_4.jpg" alt="">
                    </a>
                    <a href="img/about/IMG_5.jpg">
                        <img src="img/about/IMG_5.jpg" alt="">
                    </a>
                    <a href="img/about/IMG_6.jpg">
                        <img src="img/about/IMG_6.jpg" alt="">
                    </a>
                    <a href="img/about/IMG_7.jpg">
                        <img src="img/about/IMG_7.jpg" alt="">
                    </a>
                    <a href="img/about/IMG_8.jpg">
                        <img src="img/about/IMG_8.jpg" alt="">
                    </a>
                    <a href="img/about/IMG_8.jpg">
                        <img src="img/about/IMG_8.jpg" alt="">
                    </a>
                  
                </div>
            </section>
            
            <section class="about-us">

                <div class="text-about text-center">
                    <h1 class="mb-3">Tentang IDC</h1>
                    <p class="mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis sequi tenetur
                        quam animi ex facere perspiciatis, ratione impedit iste aliquam voluptas ut quod, at quis
                        numquam id ipsam. Beatae, delectus? Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Molestiae praesentium commodi ipsam eos aliquid eveniet, voluptatum dolore rem optio. Placeat
                        excepturi accusamus dolor totam aut repellendus eaque corrupti beatae eum!</p>
                </div>

                <div id="timeline-area">
                    <div class="timeline">
                        <div class="row">
                            <div class="col-md">
                                <h3> 2007: Milestone 1</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dapibus lacinia.
                                    In egestas eu nibh at accumsan.</p>
                            </div>
                            <div class="col-md">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod possimus culpa eaque
                                    minima nostrum porro eligendi fugit, consectetur maiores libero ex placeat
                                    voluptatem temporibus commodi totam asperiores consequatur, accusantium officia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="row">
                            <div class="col-md">
                                <h3> 2007: Milestone 1</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dapibus lacinia.
                                    In egestas eu nibh at accumsan.</p>
                            </div>
                            <div class="col-md">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod possimus culpa eaque
                                    minima nostrum porro eligendi fugit, consectetur maiores libero ex placeat
                                    voluptatem temporibus commodi totam asperiores consequatur, accusantium officia.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline">
                        <div class="row">
                            <div class="col-md">
                                <h3> 2007: Milestone 1</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dapibus lacinia.
                                    In egestas eu nibh at accumsan.</p>
                            </div>
                            <div class="col-md">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod possimus culpa eaque
                                    minima nostrum porro eligendi fugit, consectetur maiores libero ex placeat
                                    voluptatem temporibus commodi totam asperiores consequatur, accusantium officia.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </section>


            <br><br><br>

        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
<script>
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    const aboutSection = document.querySelector('.about-us');
    const textAboutSection = document.querySelector('.text-about');
    const vissionSection = document.querySelector('.vission-us');
    const textVissionSection = document.querySelector('.text-vission');

    const run = () => {
        if (isInViewport(aboutSection)) {
            aboutSection.classList.add('show');
        }

        if (isInViewport(textAboutSection)) {
            textAboutSection.classList.add('show');
        }

        if (isInViewport(vissionSection)) {
            vissionSection.classList.add('show');
        }

        if (isInViewport(textVissionSection)) {
            textVissionSection.classList.add('show');
        }
    };

    window.addEventListener('load', run);
    window.addEventListener('resize', run);
    window.addEventListener('scroll', run);

    lightGallery(document.querySelector('.gallery'));

</script>

@endsection
