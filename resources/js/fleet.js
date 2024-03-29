updatePadding();

window.addEventListener('resize', function () {
  updatePadding();
});

function updatePadding() {
  var headerContent = document.querySelector('nav');
  document.getElementById('fleet').style.paddingTop = (headerContent.offsetHeight + 208) + 'px';
}
