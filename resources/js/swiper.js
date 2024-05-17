import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

let isLaptop = window.matchMedia('(min-width: 1024px)').matches;
let slidesPerView = isLaptop ? 3 : 1;
const swiper = new Swiper('.swiper', {
  slidesPerView: slidesPerView,
  spaceBetween: 30,
  grabCursor: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
  },
});
