import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

let isLaptop = window.matchMedia('(min-width: 1024px)').matches;
let slidesPerView = isLaptop ? 3 : 1;
const swiper = new Swiper('.swiper', {

  effect: "coverflow",

  coverflowEffect: {
    rotate: 25,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },

  autoplay: {
    delay: 10000,
    disableOnInteraction: true,
  },

  grabCursor: true,
  
  slidesPerView: slidesPerView,

  spaceBetween: 30,

  direction: 'horizontal',

  loop: true,
  
  pagination: {
    el: '.swiper-pagination'
  },

});
