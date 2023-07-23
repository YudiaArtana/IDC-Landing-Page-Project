// Owlcarousel
import 'owl.carousel/dist/owl.carousel.min.js';
import AOS from 'aos/src/js/aos';

$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        center: true,
        navText: [
            "<i class='fa fa-angle-left text-secondary'></i>",
            "<i class='fa fa-angle-right text-secondary'></i>"
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 3
            }
        }
    });
});

AOS.init();


