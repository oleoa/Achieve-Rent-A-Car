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

var buttonsScrollTop = document.getElementsByClassName('scrollToTop');

for (var i = 0; i < buttonsScrollTop.length; i++) {
    buttonsScrollTop[i].addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

var buttonsScroll = document.getElementsByClassName('scrollToSell');

for (var i = 0; i < buttonsScroll.length; i++) {
    buttonsScroll[i].addEventListener('click', function() {
        var targetSection = document.getElementById("sell");
        if (targetSection) targetSection.scrollIntoView({ behavior: 'smooth' });
    });
}

var colorInput = document.getElementById('color');
var setColorWhite = document.getElementById('setColorWhite');
var setColorBlue = document.getElementById('setColorBlue');
var setColorYellow = document.getElementById('setColorYellow');
var setColorRed = document.getElementById('setColorRed');

if(setColorWhite){
    setColorWhite.addEventListener('click', function() {
      event.preventDefault();
      colorInput.value = '#ffffff';
    });
}

if(setColorBlue){
    setColorBlue.addEventListener('click', function() {
      event.preventDefault();
      colorInput.value = '#263E78';
    });
}

if(setColorYellow){
    setColorYellow.addEventListener('click', function() {
      event.preventDefault();
      colorInput.value = '#FFD700';
    });
}

if(setColorRed){
    setColorRed.addEventListener('click', function() {
      event.preventDefault();
      colorInput.value = '#DA291C';
    });
}

var textColorInput = document.getElementById('text_color');
var setTextColorWhite = document.getElementById('setTextColorWhite');
var setTextColorBlue = document.getElementById('setTextColorBlue');
var setTextColorYellow = document.getElementById('setTextColorYellow');
var setTextColorRed = document.getElementById('setTextColorRed');

if(setTextColorWhite){
    setTextColorWhite.addEventListener('click', function() {
      event.preventDefault();
      textColorInput.value = '#ffffff';
    });
}

if(setTextColorBlue){
    setTextColorBlue.addEventListener('click', function() {
      event.preventDefault();
      textColorInput.value = '#263E78';
    });
}

if(setTextColorYellow){
    setTextColorYellow.addEventListener('click', function() {
      event.preventDefault();
      textColorInput.value = '#FFD700';
    });
}

if(setTextColorRed){
    setTextColorRed.addEventListener('click', function() {
      event.preventDefault();
      textColorInput.value = '#DA291C';
    });
}
