let system = document.getElementById('anyrentBookingsIframe');
if (system) {
  system.title = 'Anyrent Bookings System';
  let firstTime = true;
  window.addEventListener("message", function(event) {
    if (event.source === system.contentWindow) {
      if (event.data.type === "arIframeUrlChange") {
        console.log('enters in the event.data.type === "arIframeUrlChange');
        var newURL = event.data.url;
        //console.debug("URL mudou: " + newURL);
        console.log(JSON.stringify(event.data));
        console.log('is the first time?'+firstTime);
        if(!firstTime) {
          document.getElementById("anyrent-system-scroller").scrollIntoView({
            behavior: "smooth"
          });
        }
        firstTime = false;
      }
    }
  }, false);
}
