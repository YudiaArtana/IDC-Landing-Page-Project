import Ukiyo from "ukiyojs";

const parallax = document.querySelector('.ukiyo')

new Ukiyo(parallax, {
    scale: 1.5, // 1~2 is recommended
    speed: 1.5, // 1~2 is recommended
    willChange: true, // This may not be valid in all cases
    wrapperClass: "ukiyo-wrapper",
    externalRAF: false
})