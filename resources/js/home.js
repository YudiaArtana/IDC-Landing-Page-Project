import Ukiyo from "ukiyojs";
// import $ from 'jquery';
import 'owl.carousel/dist/owl.carousel.min.js';
import 'owl.carousel/dist/assets/owl.carousel.min.css';
import 'owl.carousel/dist/assets/owl.carousel.css';
import AOS from 'aos';
import 'aos/dist/aos.css'; // Pastikan ini ada
AOS.init();

const parallax = document.querySelector('.ukiyo')

new Ukiyo(parallax, {
    scale: 1.5, // 1~2 is recommended
    speed: 1, // 1~2 is recommended
    wrapperClass: "ukiyo-wrapper",
})

$('.owl-carousel').owlCarousel({
    autoWidth: true,
    nav: true,
    autoplayHoverPause: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})




import 'paroller.js/dist/jquery.paroller.min.js';  


// $(".paroller, [data-paroller-factor]").paroller({
//     factor: 0.2,            // multiplier for scrolling speed and offset
//     factorXs: 0.2,           // multiplier for scrolling speed and offset
//     type: 'foreground',     // background, foreground
//     direction: 'horizontal', // vertical, horizontal
//     transition: 'transform 0.05 ease-in' // CSS transition
// });

