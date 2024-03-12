const balloon = document.getElementById('whatsappBalloon');
setTimeout(() => {
  balloon.classList.remove('2xl:hidden');
  balloon.classList.add('2xl:block');
  balloon.classList.remove('hidden');
  setTimeout(() => {
    balloon.classList.add('hidden');
  }, 10000);
}, 5000);
