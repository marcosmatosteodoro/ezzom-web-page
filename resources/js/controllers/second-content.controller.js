import Splide from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', function () {
  const splides = document.getElementsByClassName('second-content-splide');

  const slipdeConfig = {
    type   : 'loop',
    perPage: 3,
    autoplay: true,
    arrows: false,
    breakpoints: {
      1840: { perPage: 2 },
      1200: { perPage: 1 },
    },
  }

  for (let i = 0; i < splides.length; i++) {
    const splide = splides[i];
    new Splide(`#${splide.id}`, slipdeConfig).mount();
  }
});
