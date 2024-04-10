let system = document.getElementById('anyrentBookingsIframe');
if (system) {
  system.title = 'Anyrent Bookings System';
  system.onload = function() {
    let systemLoader = document.getElementById('systemLoader');
    systemLoader.style.display = 'none';
  }
}
