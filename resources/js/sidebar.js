const menu = document.getElementById('menu');
menu.addEventListener('click', () => {
  const sidebar = document.getElementById('sidebar');
  sidebar.classList.toggle('hover:w-48');
  sidebar.classList.toggle('[&>a>span]:hover:block');
  sidebar.classList.toggle('lg:w-16');
  sidebar.classList.toggle('lg:[&>a>span]:hidden');
  const icon = document.getElementById('menu-icon');
  icon.classList.toggle('fa-bars');
  icon.classList.toggle('fa-xmark');
});

const menuMobile = document.getElementById('menu-mobile');
menuMobile.addEventListener('click', () => {
  const sidebar = document.getElementById('sidebar');
  sidebar.classList.toggle('-translate-x-full');
});

const closeMenu = document.getElementById('close-menu');
closeMenu.addEventListener('click', () => {
  const sidebar = document.getElementById('sidebar');
  sidebar.classList.toggle('-translate-x-full');
});
