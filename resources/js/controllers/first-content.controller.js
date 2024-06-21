import Splide from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', function () {
  new Splide('#splide', {
    type   : 'loop',
    perPage: 4,
    autoplay: true,
  }).mount();
});