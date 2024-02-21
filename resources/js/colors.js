var divSample = document.getElementById('div-sample');
var textSample = document.getElementById('text-sample');
var textoSample = document.getElementById('texto-sample');
var textInput = document.getElementById('text');
var textoInput = document.getElementById('texto');

var colorInput = document.getElementById('color');
var setColorBlack = document.getElementById('setColorBlack');
var setColorWhite = document.getElementById('setColorWhite');
var setColorBlue = document.getElementById('setColorBlue');
var setColorYellow = document.getElementById('setColorYellow');
var setColorRed = document.getElementById('setColorRed');

if(setColorBlack){
    setColorBlack.addEventListener('click', function() {
        event.preventDefault();
        colorInput.value = '#000000';
        divSample.style.backgroundColor = colorInput.value;
    });
}

if(setColorWhite){
    setColorWhite.addEventListener('click', function() {
        event.preventDefault();
        colorInput.value = '#ffffff';
        divSample.style.backgroundColor = colorInput.value;
    });
}

if(setColorBlue){
    setColorBlue.addEventListener('click', function() {
        event.preventDefault();
        colorInput.value = '#263E78';
        divSample.style.backgroundColor = colorInput.value;
    });
}

if(setColorYellow){
    setColorYellow.addEventListener('click', function() {
        event.preventDefault();
        colorInput.value = '#FFD700';
        divSample.style.backgroundColor = colorInput.value;
    });
}

if(setColorRed){
    setColorRed.addEventListener('click', function() {
        event.preventDefault();
        colorInput.value = '#DA291C';
        divSample.style.backgroundColor = colorInput.value;
    });
}

var textColorInput = document.getElementById('text_color');
var setTextColorBlack = document.getElementById('setTextColorBlack');
var setTextColorWhite = document.getElementById('setTextColorWhite');
var setTextColorBlue = document.getElementById('setTextColorBlue');
var setTextColorYellow = document.getElementById('setTextColorYellow');
var setTextColorRed = document.getElementById('setTextColorRed');

if(setTextColorBlack){
    setTextColorBlack.addEventListener('click', function() {
        event.preventDefault();
        textColorInput.value = '#000000';
        textSample.style.color = textColorInput.value;
        textoSample.style.color = textColorInput.value;
    });
}

if(setTextColorWhite){
    setTextColorWhite.addEventListener('click', function() {
        event.preventDefault();
        textColorInput.value = '#ffffff';
        textSample.style.color = textColorInput.value;
        textoSample.style.color = textColorInput.value;
    });
}

if(setTextColorBlue){
    setTextColorBlue.addEventListener('click', function() {
        event.preventDefault();
        textColorInput.value = '#263E78';
        textSample.style.color = textColorInput.value;
        textoSample.style.color = textColorInput.value;
    });
}

if(setTextColorYellow){
    setTextColorYellow.addEventListener('click', function() {
        event.preventDefault();
        textColorInput.value = '#FFD700';
        textSample.style.color = textColorInput.value;
        textoSample.style.color = textColorInput.value;
    });
}

if(setTextColorRed){
    setTextColorRed.addEventListener('click', function() {
        event.preventDefault();
        textColorInput.value = '#DA291C';
        textSample.style.color = textColorInput.value;
        textoSample.style.color = textColorInput.value;
    });
}

textInput.addEventListener('input', function() {
    textSample.innerHTML = textInput.value;
});
textoInput.addEventListener('input', function() {
    textoSample.innerHTML = textoInput.value;
});
colorInput.addEventListener('input', function() {
    divSample.style.backgroundColor = colorInput.value;
});
textColorInput.addEventListener('input', function() {
    textSample.style.color = textColorInput.value;
    textoSample.style.color = textColorInput.value;
});
