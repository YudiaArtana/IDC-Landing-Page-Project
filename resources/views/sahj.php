@extends('layouts.master')

@section('vite')
  @vite(['resources/js/app.js'])
@endsection

@section('title', 'Tentang Kami')

@section('content')
<div class="about"></div>
<div class="timeline-container">
<div class="page-background">
  <div class="bg-color">


    <div class="text-hero m-0 container position-absolute p-0">
      <h4>TENTANG KAMI</h4>
      <h1 class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
    </div>
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
      </div>
  
    </div>
    <section class="about-us text-center">
      <div class="text-about">
        <h1 class="text-dark mb-3">Tentang IDC</h1>
        <p class="text-dark mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis sequi tenetur quam animi ex facere perspiciatis, ratione impedit iste aliquam voluptas ut quod, at quis numquam id ipsam. Beatae, delectus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae praesentium commodi ipsam eos aliquid eveniet, voluptatum dolore rem optio. Placeat excepturi accusamus dolor totam aut repellendus eaque corrupti beatae eum!</p>
      </div>
    </section>
  
 
  <div id="timeline">
    <div class="history text-center mt-3">
      <h1 class="text-dark">SEJARAH KAMI</h1>
      <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dapibus lacinia. In egestas eu nibh at accumsan.</p>
    </div>
    <ul>
      <li>
        <div>
          <h3><i class="fas fa-chevron-right"></i> 2007: Milestone 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dapibus lacinia. In egestas eu nibh at accumsan.</p>
        </div>
      </li>
      <li>
        <div>
          <h3><i class="fas fa-chevron-right"></i> 2008: Milestone 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dapibus lacinia. In egestas eu nibh at accumsan.</p>
        </div>
      </li>
      <li>
        <div>
          <h3><i class="fas fa-chevron-right"></i> 2009: Milestone 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dapibus lacinia. In egestas eu nibh at accumsan.</p>
        </div>
      </li>
      <li>
        <div>
          <h3><i class="fas fa-chevron-right"></i> 2011: Milestone 4</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dapibus lacinia. In egestas eu nibh at accumsan.</p>
        </div>
      </li>
      <li>
        <div>
          <h3><i class="fas fa-chevron-right"></i> 2012: Milestone 5</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dapibus lacinia. In egestas eu nibh at accumsan.</p>
        </div>
      </li>
      <li>
        <div>
          <h3><i class="fas fa-chevron-right"></i> 2013: Milestone 6</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dapibus lacinia. In egestas eu nibh at accumsan.</p>
        </div>
      </li>
    </ul>
  </div>

  
  {{-- <section class="vission-us text-center">
    <div class="text-vission">
      <h1 class="text-dark mb-3">Whats Doing Now?</h1>
      <p class="text-dark mx-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis sequi tenetur quam animi ex facere perspiciatis, ratione impedit iste aliquam voluptas ut quod, at quis numquam id ipsam. Beatae, delectus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae praesentium commodi ipsam eos aliquid eveniet, voluptatum dolore rem optio. Placeat excepturi accusamus dolor totam aut repellendus eaque corrupti beatae eum!</p>
    </div>
  
  
    <div class="container">
  
      <div class="row justify-content-center">
        <div class="col-md d-flex justify-content-end mb-3">
          <div class="card" style="width: 25rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md d-flex justify-content-start mb-3">
          <div class="card" style="width: 25rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
  
      <div class="row justify-content-center">
        <div class="col-md d-flex justify-content-end mb-3">
          <div class="card" style="width: 25rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md d-flex justify-content-start mb-3">
          <div class="card" style="width: 25rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  
  </section> --}}




  </div>
</div>
</div>

 

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
<script>

const items = document.querySelectorAll('#timeline li');
const aboutSection = document.querySelector('.about-us');
const textAboutSection = document.querySelector('.text-about');
const vissionSection = document.querySelector('.vission-us');
const textVissionSection = document.querySelector('.text-vission');

const isInViewport = el => {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <=
      (window.innerWidth || document.documentElement.clientWidth)
  );
};

const run = () => {
  items.forEach(item => {
    if (isInViewport(item)) {
      item.classList.add('show');
    }
  });

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
