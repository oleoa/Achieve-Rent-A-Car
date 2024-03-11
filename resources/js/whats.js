const balloon = document.getElementById('whatsappBalloon');
setTimeout(() => {
  balloon.classList.remove('xl:hidden');
  balloon.classList.add('xl:block');
  balloon.classList.remove('hidden');
  setTimeout(() => {
    balloon.classList.add('hidden');
  }, 10000);
}, 5000);
