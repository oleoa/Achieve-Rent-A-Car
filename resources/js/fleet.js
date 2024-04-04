updatePadding();

window.addEventListener('resize', function () {
  updatePadding();
});

function updatePadding() {
  var headerContent = document.querySelector('nav');
  let fleet = document.getElementById('fleet');
  if (fleet)
    fleet.style.paddingTop = (headerContent.offsetHeight + 208) + 'px';
}
