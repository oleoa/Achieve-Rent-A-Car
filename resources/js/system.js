let system = document.getElementById('anyrentBookingsIframe');
if (system) {
  system.title = 'Anyrent Bookings System';
  let systemHeight = systemLoader.parentNode.offsetHeight+'px';
  setInterval(function() {
    if(systemHeight !== system.style.height) {
      systemHeight = system.style.height;
      document.getElementById("anyrent").scrollIntoView({
        behavior: "instant"
      });
    }
  }, 50);
}
