const toggle = document.getElementsByClassName('sidebar-toggle');
for(let i = 0; i < toggle.length; i++){
  toggle[i].addEventListener('click', () => {
    const sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('-translate-x-full');
  });
}
