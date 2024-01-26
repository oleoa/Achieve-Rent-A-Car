import './bootstrap';

const sidebar = document.getElementById('sidebar');
const openSidebarBtn = document.getElementById('openSidebar');
const closeSidebarBtn = document.getElementById('closeSidebar');

openSidebarBtn.addEventListener('click', () => {
    sidebar.classList.remove('-translate-x-full');
});

closeSidebarBtn.addEventListener('click', () => {
    sidebar.classList.add('-translate-x-full');
});

document.addEventListener('DOMContentLoaded', function () {
  const faqItems = document.querySelectorAll('.faq');

  faqItems.forEach(item => {
    const button = item.querySelector('button');
    const content = item.querySelector('.hidden');

    button.addEventListener('click', () => {
      content.classList.toggle('hidden');
      button.querySelector('span:last-child').textContent = content.classList.contains('hidden') ? '+' : '-';
    });
  });
});

function updatePadding() {
  var headerContent = document.getElementById('headerContent');
  if(headerContent)
    document.getElementById('mainContent').style.paddingTop = headerContent.offsetHeight + 'px';
}

// Initial padding update
updatePadding();

// Recalculate padding on window resize (optional)
window.addEventListener('resize', function () {
  updatePadding();
});

var buttons = document.getElementsByClassName('loaderActivator');

for (var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener('click', function() {
    var loadingDiv = document.getElementById('loading');
    loadingDiv.style.display = (loadingDiv.style.display === 'hidden' || loadingDiv.style.display === '') ? 'flex' : 'hidden';
  });
}


var buttons = document.getElementsByClassName('loaderActivator');

for (var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener('click', function() {
    var loadingDiv = document.getElementById('loading');
    loadingDiv.style.display = (loadingDiv.style.display === 'hidden' || loadingDiv.style.display === '') ? 'flex' : 'hidden';
  });
}

var colorInput = document.getElementById('color');
var setColorWhite = document.getElementById('setColorWhite');
var setColorBlue = document.getElementById('setColorBlue');
var setColorYellow = document.getElementById('setColorYellow');
var setColorRed = document.getElementById('setColorRed');

setColorWhite.addEventListener('click', function() {
  event.preventDefault();
  colorInput.value = '#ffffff';
});

setColorBlue.addEventListener('click', function() {
  event.preventDefault();
  colorInput.value = '#263E78';
});

setColorYellow.addEventListener('click', function() {
  event.preventDefault();
  colorInput.value = '#FFD700';
});

setColorRed.addEventListener('click', function() {
  event.preventDefault();
  colorInput.value = '#DA291C';
});

var textColorInput = document.getElementById('text_color');
var setTextColorWhite = document.getElementById('setTextColorWhite');
var setTextColorBlue = document.getElementById('setTextColorBlue');
var setTextColorYellow = document.getElementById('setTextColorYellow');
var setTextColorRed = document.getElementById('setTextColorRed');

setTextColorWhite.addEventListener('click', function() {
  event.preventDefault();
  textColorInput.value = '#ffffff';
});

setTextColorBlue.addEventListener('click', function() {
  event.preventDefault();
  textColorInput.value = '#263E78';
});

setTextColorYellow.addEventListener('click', function() {
  event.preventDefault();
  textColorInput.value = '#FFD700';
});

setTextColorRed.addEventListener('click', function() {
  event.preventDefault();
  textColorInput.value = '#DA291C';
});
