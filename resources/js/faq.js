const faqItems = document.querySelectorAll('.faq');

faqItems.forEach(item => {
    const button = item.querySelector('#question_box');
    const content = item.querySelector('.answer');

    button.addEventListener('click', () => {
        var span = button.querySelector('span:last-child');
        if(span)
            span.textContent = content.classList.contains('hidden') ? '+' : '-';
        content.classList.toggle('hidden');
    });
});
