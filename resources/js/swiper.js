import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

let isLaptop = window.matchMedia('(min-width: 1024px)').matches;
let slidesPerView = isLaptop ? 3 : 1;
const swiper = new Swiper('.swiper', {
  effect: "coverflow",
  grabCursor: true,
  loop: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },

});
