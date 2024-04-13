let system = document.getElementById('anyrentBookingsIframe');
if (system) {
  system.title = 'Anyrent Bookings System';
  system.onload = function() {
    let systemLoader = document.getElementById('anyrent-skeleton');
    systemLoader.style.display = 'none';
  }
}
