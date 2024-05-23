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
    let navbar = (!currentURL) ? 0 : 80;
    document.querySelector('#mainContent').style.paddingTop = headerContent.clientHeight + navbar + 'px';
    document.querySelector('#anyrent-system-scroller').style.top = '-' + (headerContent.clientHeight + 80) + 'px';
    document.querySelector('#anyrent-scroller').style.top = '-' + (headerContent.clientHeight + 80) + 'px';
  }
}
