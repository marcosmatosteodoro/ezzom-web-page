import Splide from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', function () {
  new Splide('#first-content-splide', {
    type   : 'loop',
    perPage: 5,
    autoplay: true,
    arrows: false,
    breakpoints: {
      1200: { perPage: 4 },
      992:  { perPage: 3 },
      768:  { perPage: 2 },
      576:  { perPage: 1 },
    },
  }).mount();
});