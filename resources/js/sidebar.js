const menu = document.getElementById('menu');
menu.addEventListener('click', () => {
  const sidebar = document.getElementById('sidebar');
  sidebar.classList.toggle('hover:w-48');
  sidebar.classList.toggle('[&>a>span]:hover:block');
  sidebar.classList.toggle('w-16');
  sidebar.classList.toggle('[&>a>span]:hidden');
  sidebar.classList.toggle('w-48');
});
