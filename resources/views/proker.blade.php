@extends('layouts.master')

@section('vite')
  @vite(['resources/js/app.js', 'resources/css/proker.css'])
@endsection

@section('title', 'proker')

@section('content')
    <section class="section-about">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                PROGRAM KERJA
            </h2>
        </div>
        <div class="row">
            <div class="col-1-of-2">
                <h3 class="heading-tertiary u-margin-bottom-small">
                    TEST
                </h3>
                <p class="paragraph">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae
                    iste illum inventore magnam omnis nostrum ullam ratione velit odio
                    sit!
                </p>

                <h3 class="heading-tertiary u-margin-bottom-small">
                    TEST
                </h3>
                <p class="paragraph">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae
                    iste illum inventore magnam omnis nostrum ullam ratione velit odio
                    sit!
                </p>

                <h3 class="heading-tertiary u-margin-bottom-small">
                    TEST
                </h3>
                <p class="paragraph">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae
                    iste illum inventore magnam omnis nostrum ullam ratione velit odio
                    sit!
                </p>
            </div>
            <div class="col-1-of-2">
                <div class="composition">
                    <img srcset="img/proker/small (1).jpg 300w, img/proker/1.jpg 1000w" alt="photo 1"
                        sizes="(max-width:56.25em) 20-vw, (max-width:37.5em) 30-vw, 300px"
                        class="composition__photo composition__photo--p1" src="img/proker/1.jpg" />

                    <img srcset="img/proker/small (2).jpg 300w, img/proker/2.jpg 1000w" alt="photo 2"
                        sizes="(max-width:56.25em) 20-vw, (max-width:37.5em) 30-vw, 300px"
                        class="composition__photo composition__photo--p2" src="img/proker/2.jpg" />

                    <img srcset="img/proker/small (3).jpg 300w, img/proker/3.jpg 1000w" alt="photo 3"
                        sizes="(max-width:56.25em) 20-vw, (max-width:37.5em) 30-vw, 300px"
                        class="composition__photo composition__photo--p3" src="img/proker/3.jpg" />
                </div>
            </div>
        </div>
    </section>
@endsection