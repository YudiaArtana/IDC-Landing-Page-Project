import Ukiyo from "ukiyojs";

const parallax = document.querySelector('.ukiyo')

new Ukiyo(parallax, {
    scale: 1.5, // 1~2 is recommended
    speed: 1.5, // 1~2 is recommended
    willChange: true, // This may not be valid in all cases
    wrapperClass: "ukiyo-wrapper",
    externalRAF: false
})


import 'paroller.js/dist/jquery.paroller.min.js';  
import $ from 'jquery';

$(".paroller, [data-paroller-factor]").paroller({
    factor: 0.3,            // multiplier for scrolling speed and offset
    factorXs: 0.1,           // multiplier for scrolling speed and offset
    type: 'foreground',     // background, foreground
    direction: 'horizontal', // vertical, horizontal
    transition: 'transform 0.2s ease-in' // CSS transition
});

