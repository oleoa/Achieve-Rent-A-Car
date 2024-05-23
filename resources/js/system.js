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
        if(event.data.step == ""){
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

        const url = 'https://my-api-production-a7ab.up.railway.app/anyrent';
        const data = {
          "debug": JSON.stringify(event.data)
        }
        const options = {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(data)
        };
        fetch(url, options)
      }
    }
  }, false);
}
