const slider = document.getElementById('slider');
const next = document.querySelector('.next');
const prev = document.querySelector('.prev');

next.addEventListener('click', () => {
  slider.scrollBy({ left: 320, behavior: 'smooth' });
});

prev.addEventListener('click', () => {
  slider.scrollBy({ left: -320, behavior: 'smooth' });
});
