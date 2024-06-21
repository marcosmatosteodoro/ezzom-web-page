import Splide from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', function () {
  const splides = document.getElementsByClassName('second-content-splide');

  const slipdeCOnfig = {
    type   : 'loop',
    perPage: 3,
    autoplay: true,
    arrows: false,
    // breakpoints: {
    //   1200: { perPage: 4 },
    //   992:  { perPage: 3 },
    //   768:  { perPage: 2 },
    //   576:  { perPage: 1 },
    // },
  }

  for (let i = 0; i < splides.length; i++) {
    const splide = splides[i];
    new Splide(`#${splide.id}`, slipdeCOnfig).mount();
  }
});
