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

  window.addEventListener('resize', hiddenPaginationElements);
  hiddenPaginationElements()
});

function hiddenPaginationElements() {
  const paginationElements = document.getElementsByClassName('splide__pagination');
  
  for (let i = 0; i < paginationElements.length; i++) {
    const paginationElement = paginationElements[i];
    const contentElement = paginationElement.parentElement
  
    if (paginationElement && paginationElement?.children?.length > 1) {
      contentElement.classList.remove('pagination-hidden')
    } else {
      contentElement.classList.add('pagination-hidden')
    }
  }
}