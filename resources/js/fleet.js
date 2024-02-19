var iframe = document.getElementById('anyrentBookingsIframe');
updateIframeHeight();

window.addEventListener('resize', function () {
    updateIframeHeight();
});

function updateIframeHeight() {
    var fleetLength = document.getElementById('fleetLength').value;
    const screenWidth = window.innerWidth;
    var rows = screenWidth <= 1008 ? fleetLength : Math.ceil(fleetLength/3) ;
    iframe.style.height = 430*rows+'px';
}

iframe.onload = function() {

    var innerDoc = iframe.contentDocument || iframe.contentWindow.document;

    var btns = innerDoc.querySelectorAll('button');
    
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener('click', function() {
            window.scrollBy(100, 0);
        });
    }

}
