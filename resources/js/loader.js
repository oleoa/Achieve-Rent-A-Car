const allLinks = document.querySelectorAll('a');
const links = Array.from(allLinks).filter(link => {
  return link.getAttribute('target') !== '_blank' && !link.classList.contains('notActivateLoader');
});
for (var i = 0; i < links.length; i++) {
  links[i].addEventListener('click', function() {
    var loadingDiv = document.getElementById('loading');
    loadingDiv.style.display = (loadingDiv.style.display === 'hidden' || loadingDiv.style.display === '') ? 'flex' : 'hidden';
  });
}

var loaders = document.querySelectorAll('.load');
for (var i = 0; i < loaders.length; i++) {
  loaders[i].addEventListener('click', function() {
    var loadingDiv = document.getElementById('loading');
    loadingDiv.style.display = (loadingDiv.style.display === 'hidden' || loadingDiv.style.display === '') ? 'flex' : 'hidden';
  });
}
