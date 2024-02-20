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
