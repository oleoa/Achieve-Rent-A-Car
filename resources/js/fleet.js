var iframe = document.getElementById('anyrentBookingsIframe');
var fleetLength = document.getElementById('fleetLength').value;
updateIframeHeight();

window.addEventListener('resize', function () {
    updateIframeHeight();
});

function updateIframeHeight() {
    const screenWidth = window.innerWidth;
    var rows = screenWidth <= 1008 ? fleetLength : Math.ceil(fleetLength/3) ;
    iframe.style.height = 430*rows+'px';
}
