let system = document.getElementById('anyrentBookingsIframe');
if (system) {
  system.title = 'Anyrent Bookings System';
  let firstTime = true;
  let anyrentSystemScroller = document.getElementById("anyrent-system-scroller");
  window.addEventListener("message", function(event) {
    if (event.source === system.contentWindow) {
      if (event.data.type === "arIframeUrlChange") {
        //var newURL = event.data.url;
        //console.debug("URL mudou: " + newURL);
        //console.log(JSON.stringify(event.data));
        if(!firstTime){
          setTimeout(function(){
            anyrentSystemScroller.scrollIntoView({
              behavior: "smooth"
            });
          }, 500)
        }
        firstTime = false;
      }
    }
  }, false);
}
