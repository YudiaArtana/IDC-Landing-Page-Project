import './bootstrap';

// IMPORT JQUERY
import $ from 'jquery';

// IMPORT BOOTSTRAP
import '../sass/app.scss';  

// CSS
import '../css/navbar.css'; 
import '../css/home.css'; 
import '../css/team.css'; 
import '../css/news.css'; 
import '../css/about.css'; 

// JS
import './news';

// LIBRARY
import 'owl.carousel/dist/assets/owl.carousel.min.css';
import 'owl.carousel/dist/owl.carousel.min.js';

import Ukiyo from "ukiyojs";

const parallax = document.querySelector('.ukiyo')

new Ukiyo(parallax, {
    scale: 1.5, // 1~2 is recommended
    speed: 1.5, // 1~2 is recommended
    willChange: true, // This may not be valid in all cases
    wrapperClass: "ukiyo-wrapper",
    externalRAF: false
})


