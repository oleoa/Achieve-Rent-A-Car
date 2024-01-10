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

document.addEventListener('DOMContentLoaded', function () {
  const faqItems = document.querySelectorAll('.faq');

  faqItems.forEach(item => {
    const button = item.querySelector('button');
    const content = item.querySelector('.hidden');

    button.addEventListener('click', () => {
      content.classList.toggle('hidden');
      button.querySelector('span:last-child').textContent = content.classList.contains('hidden') ? '+' : '-';
    });
  });
});