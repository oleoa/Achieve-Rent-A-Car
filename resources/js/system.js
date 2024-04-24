let system = document.getElementById('anyrentBookingsIframe');
if (system) {
  system.title = 'Anyrent Bookings System';
  system.onload = function() {
    let systemLoader = document.getElementById('anyrent-skeleton');
    let systemHeight = systemLoader.parentNode.offsetHeight+'px';
    systemLoader.style.display = 'none';
    setInterval(function() {
      if(systemHeight !== system.style.height) {
        systemHeight = system.style.height;
        document.getElementById("anyrent").scrollIntoView({
          behavior: "instant"
        });
      }
    }, 50);
  }
}
