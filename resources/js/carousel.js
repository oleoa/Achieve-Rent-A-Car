/*
const carouselSlide = document.querySelector('.carousel-slide');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let counter = 0;
const size = carouselSlide.clientWidth;

function slideNext() {
  if (counter >= carouselSlide.children.length - 1) return;
  counter++;
  carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
}

function slidePrev() {
  if (counter <= 0) return;
  counter--;
  carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
}

nextBtn.addEventListener('click', slideNext);
prevBtn.addEventListener('click', slidePrev);
*/
