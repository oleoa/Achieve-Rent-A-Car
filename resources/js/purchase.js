let system = document.getElementById('anyrentBookingsIframe');
if (system) {
  window.addEventListener("message", function(event) {
    if (event.source === system.contentWindow) {
      if (event.data.type === "arIframeUrlChange") {
        var newURL = event.data.url;
        console.debug("URL mudou: " + newURL);
        console.log(JSON.stringify(event.data));
        console.log('should scroll to '+anyrentSystemScroller);
        setTimeout(function(){
          anyrentSystemScroller.scrollIntoView({
            behavior: "smooth"
          });
        }, 500)
      }
    }
  }, false);
}
