const sidebar = document.getElementById('sidebar');

sidebar.addEventListener('mouseover', () => {
  sidebar.classList.remove('w-16');
  sidebar.classList.add('w-64');
  sidebar.classList.remove('[&>a>span]:hidden');
});

sidebar.addEventListener('mouseleave', () => {
  sidebar.classList.remove('w-64');
  sidebar.classList.add('w-16');
  sidebar.classList.add('[&>a>span]:hidden');
});
