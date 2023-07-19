import './bootstrap';

// IMPORT JQUERY
import $ from 'jquery';

// IMPORT BOOTSTRAP
import '../sass/app.scss';  
  
// MY CSS
import '../css/navbar.css'; 
import '../css/home.css'; 
import '../css/team.css'; 
import '../css/news.css'; 
import '../css/about.css'; 


// LIBRARY
import Ukiyo from "ukiyojs";

const parallax = document.querySelector('.ukiyo')

new Ukiyo(parallax, {
    scale: 1.5, // 1~2 is recommended
    speed: 1.5, // 1~2 is recommended
    willChange: true, // This may not be valid in all cases
    wrapperClass: "ukiyo-wrapper",
    externalRAF: false
})


