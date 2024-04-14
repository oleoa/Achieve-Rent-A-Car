var currentURL = window.location.href.split('/')[4];
var headerContent = document.querySelector('#discount');
if(headerContent){
  updatePadding();
  
  window.addEventListener('resize', function () {
    updatePadding();
  });
  
  window.onload = function () {
    updatePadding();
  };
  
  function updatePadding() {
    var headerContent = document.querySelector('#discount');
    let navbar = (!currentURL) ? 0 : 80;
    document.querySelector('#mainContent').style.paddingTop = headerContent.clientHeight + navbar + 'px';
  }
}
