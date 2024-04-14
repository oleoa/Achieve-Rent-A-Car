var currentURL = window.location.href.split('/')[4];
var headerContent = document.querySelector('#discount');
if(headerContent){
  updatePaddingDiscount();
  
  window.addEventListener('resize', function () {
    updatePaddingDiscount();
  });
  
  window.onload = function () {
    updatePaddingDiscount();
  };
  
  function updatePaddingDiscount() {
    var headerContent = document.querySelector('#discount');
    let navbar = (!currentURL) ? 0 : 80;
    document.querySelector('#mainContent').style.paddingTop = headerContent.clientHeight + navbar + 'px';
  }
}
