const faqItems = document.querySelectorAll('.faq');

faqItems.forEach(item => {
    const button = item.querySelector('button');
    const content = item.querySelector('.hidden');

    button.addEventListener('click', () => {
        button.querySelector('span:last-child').textContent = content.classList.contains('hidden') ? '+' : '-';
        content.classList.toggle('hidden');
    });
});
