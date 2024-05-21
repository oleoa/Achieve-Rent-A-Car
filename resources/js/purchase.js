let system = document.getElementById('anyrentBookingsIframe');
if (system) {
  window.addEventListener("message", function(event) {
    if (event.source === system.contentWindow) {
      if (event.data.type === "arIframeUrlChange") {
        //console.log(JSON.stringify(event.data));
        let step = event.data.step;
        let pickup_station = event.data.booking_data.pickup_station;
        let dropoff_station = event.data.booking_data.dropoff_station;
        let drivers = event.data.booking_data.drivers;
        const data = JSON.stringify(event.data)
      }
    }
  }, false);
}
/*
Just before paying 
{"type":"arIframeUrlChange","url":"https://reservas.achieverentacar.com/en/booking/payment/stripe/MTIy","step":"MTIy","booking_data":[]}
*/
