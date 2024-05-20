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

        // Define the URL and the data you want to send
        const url = 'https://leonardoabreu.com/api';
        const data = JSON.stringify(event.data)

        // Make the POST request using fetch
        fetch(url, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json' // Specify the content type as JSON
          },
          body: JSON.stringify(data) // Convert the data object to a JSON string
        })
      }
    }
  }, false);
}
/*
Just before paying 
{"type":"arIframeUrlChange","url":"https://reservas.achieverentacar.com/en/booking/payment/stripe/MTIy","step":"MTIy","booking_data":[]}
*/
