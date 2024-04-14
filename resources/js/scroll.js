var scrollToTopBtns = document.querySelectorAll(".scrollToTopBtn");

scrollToTopBtns.forEach(function(btn) {
  btn.addEventListener("click", function() {
    // Scroll to the top of the page smoothly
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
});

let scrollToAnyrent = document.querySelectorAll(".anyrent-scroll");
if (scrollToAnyrent) {
  scrollToAnyrent.forEach(function(btn) {
    btn.addEventListener("click", function() {
      document.getElementById("anyrent").scrollIntoView({
        behavior: "smooth"
      });
    });
  });
}

let scrollToWhyUs = document.querySelectorAll(".why-us-scroll");
if (scrollToWhyUs) {
  scrollToWhyUs.forEach(function(btn) {
    btn.addEventListener("click", function() {
      document.getElementById("why-us").scrollIntoView({
        behavior: "smooth"
      });
    });
  });
}
