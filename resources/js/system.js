let system = document.getElementById('anyrentBookingsIframe');
if (system) {
  system.title = 'Anyrent Bookings System';
  let firstTime = true;
  let anyrentSystemScroller = document.getElementById("anyrent-system-scroller");
  window.addEventListener("message", function(event) {
    if (event.source === system.contentWindow) {
      if (event.data.type === "arIframeUrlChange") {

        /*
        const lang = window.location.href.split('/')[3];
        if(event.data.step == "step3"){ //finish
          window.location.href = "/"+lang+"/about";
          return;
        }
        */

        //var newURL = event.data.url;
        //console.debug("URL mudou: " + newURL);
        //console.log(JSON.stringify(event.data));
        //console.log(JSON.stringify(event.data));

        if(!firstTime){
          setTimeout(function(){
            anyrentSystemScroller.scrollIntoView({
              behavior: "smooth"
            });
          }, 100)
        }
        firstTime = false;
      }
    }
  }, false);
}
