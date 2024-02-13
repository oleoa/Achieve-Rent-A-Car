// Open and close the FAQ accordion
import './faq';

updatePadding();

window.addEventListener('resize', function () {
    updatePadding();
});

function updatePadding() {
    var headerContent = document.querySelector('nav');
    document.querySelector('main').style.paddingTop = headerContent.offsetHeight + 'px';
}


function scrollToDivWithPadding(divId, paddingTop) {
    var targetDiv = document.getElementById(divId);
    
    if (targetDiv) {
        var divTop = targetDiv.offsetTop;
        var scrollPosition = divTop - paddingTop;
        
        window.scrollTo({
            top: scrollPosition,
            behavior: 'smooth'
        });
    }
}

window.onload = function() {
    setTimeout(function() {        
        scrollToDivWithPadding('portal', 80);
    }, 1000);
};
