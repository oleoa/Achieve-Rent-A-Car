updateIframeHeight();

window.addEventListener('resize', function () {
    updateIframeHeight();
});

function updateIframeHeight() {
    var iframe = document.getElementById('anyrentBookingsIframe');
    var fleetLength = document.getElementById('fleetLength').value;
    const screenWidth = window.innerWidth;
    var rows = screenWidth <= 1008 ? fleetLength : fleetLength/3 ;
    iframe.style.height = 430*rows+'px';
}
