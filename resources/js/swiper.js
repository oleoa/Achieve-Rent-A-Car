import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

let isLaptop = window.matchMedia('(min-width: 1024px)').matches;
let slidesPerView = isLaptop ? 3 : 1;
const swiper = new Swiper('.swiper', {
  spaceBetween: 30,
  grabCursor: true,
  loop: true,
  centeredSlides: true,
  slidesPerView: "auto",
  pagination: {
    el: ".swiper-pagination",
  },

});
