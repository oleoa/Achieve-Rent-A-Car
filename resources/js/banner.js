updatePadding();

window.addEventListener('resize', function () {
  updatePadding();
});

window.onload = function () {
  updatePadding();
};

function updatePadding() {
  var headerContent = document.querySelector('#headerContent');
  document.querySelector('#mainContent').style.paddingTop = headerContent.clientHeight + 'px';
}
