// Owlcarousel
import 'owl.carousel/dist/owl.carousel.min.js';
import AOS from 'aos';
import 'aos/dist/aos.css'; // Pastikan ini ada
AOS.init();

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
            480: {
                items: 2
            },
            760: {
                items: 2
            },
            1024: {
                items: 3
            },
            1280: {
                items: 3
            }
        }
    });
});
