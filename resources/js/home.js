import Ukiyo from "ukiyojs";

const parallax = document.querySelector('.ukiyo')

new Ukiyo(parallax, {
    scale: 1.5, // 1~2 is recommended
    speed: 1.5, // 1~2 is recommended
    wrapperClass: "ukiyo-wrapper",
})


import 'paroller.js/dist/jquery.paroller.min.js';  
import $ from 'jquery';

// $(".paroller, [data-paroller-factor]").paroller({
//     factor: 0.2,            // multiplier for scrolling speed and offset
//     factorXs: 0.2,           // multiplier for scrolling speed and offset
//     type: 'foreground',     // background, foreground
//     direction: 'horizontal', // vertical, horizontal
//     transition: 'transform 0.05 ease-in' // CSS transition
// });

