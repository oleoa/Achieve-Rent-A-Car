const balloon = document.getElementById('whatsappBalloon');
setTimeout(() => {
  balloon.classList.remove('md:hidden');
  balloon.classList.add('md:block');
  balloon.classList.remove('hidden');
  setTimeout(() => {
    balloon.classList.add('hidden');
  }, 10000);
}, 5000);
