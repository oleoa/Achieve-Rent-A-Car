const carouselSlide = document.querySelector('#carousel-slide');

const prevBtn = document.getElementById('prevBtn');

const nextBtn = document.getElementById('nextBtn');

let counter = 0;

function slideNext() {
    if (counter >= carouselSlide.children.length - 1) return;
    counter++;
    carouselSlide.style.transform = 'translateX(' + (-100 * counter) + '%)';
}

function slidePrev() {
    if (counter <= 0) return;
    counter--;
    carouselSlide.style.transform = 'translateX(' + (-100 * counter) + '%)';
}

nextBtn.addEventListener('click', slideNext);

prevBtn.addEventListener('click', slidePrev);
