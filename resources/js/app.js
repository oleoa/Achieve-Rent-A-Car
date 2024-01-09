import './bootstrap';

const sidebar = document.getElementById('sidebar');
const openSidebarBtn = document.getElementById('openSidebar');
const closeSidebarBtn = document.getElementById('closeSidebar');

openSidebarBtn.addEventListener('click', () => {
    sidebar.classList.remove('-translate-x-full');
});

closeSidebarBtn.addEventListener('click', () => {
    sidebar.classList.add('-translate-x-full');
});
