updatePadding();

window.addEventListener('resize', function () {
    updatePadding();
});

function updatePadding() {
    var headerContent = document.querySelector('nav');
    document.querySelector('main').style.paddingTop = headerContent.offsetHeight + 'px';
}
