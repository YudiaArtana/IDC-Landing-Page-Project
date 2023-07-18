@extends('layouts.master')

@section('content')

<section id="about">
  <div class="container-fluid">
    <div class="about-1 d-flex flex-column align-items-start justify-content-center">
      <h4 class="fw-bold">TENTANG KAMI</h4> 
      <p class="w-50">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
  </div>
  <div class="history text-center mt-3">
    <h1>SEJARAH</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dapibus lacinia. In egestas eu nibh at accumsan.</p>
  </div>
</section>
<section id="timeline">
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
    <li>
      <div>
        <h3><i class="fas fa-chevron-right"></i> 2015: Milestone 7</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dapibus lacinia. In egestas eu nibh at accumsan.</p>
      </div>
    </li>
    <li>
      <div>
        <h3><i class="fas fa-chevron-right"></i> 2016: Milestone 8</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dapibus lacinia. In egestas eu nibh at accumsan.</p>
      </div>
    </li>
    <li>
      <div>
        <h3><i class="fas fa-chevron-right"></i> 2017: Milestone 9</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dapibus lacinia. In egestas eu nibh at accumsan.</p>
      </div>
    </li>
    <li>
      <div>
        <h3><i class="fas fa-chevron-right"></i> 2018: Milestone 10</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam posuere dapibus lacinia. In egestas eu nibh at accumsan.</p>
      </div>
    </li>
  </ul>
</section>

<script>
const items = document.querySelectorAll('#timeline li');

const isInViewport = el => {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
};

const run = () =>
  items.forEach(item => {
    if (isInViewport(item)) {
      item.classList.add('show');
    }
  });

// Events
window.addEventListener('load', run);
window.addEventListener('resize', run);
window.addEventListener('scroll', run);
</script>

@endsection
