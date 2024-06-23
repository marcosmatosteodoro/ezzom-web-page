import Splide from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', function () {
  const slipdeConfig1 = getSlipdeConfig('first')
  const slipdeConfig2 = getSlipdeConfig('second')
  const splides = document.getElementsByClassName('second-content-splide');

  new Splide('#first-content-splide', slipdeConfig1 ).mount();

  for (let i = 0; i < splides.length; i++) {
    const splide = splides[i];
    new Splide(`#${splide.id}`, slipdeConfig2).mount();
  }

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

function getSlipdeConfig(content) {
  const perPage = {
    first: 5,
    second: 3,
  }

  const breakpoints = {
    first: {
      1200: { perPage: 4 },
      992:  { perPage: 3 },
      768:  { perPage: 2 },
      576:  { perPage: 1 },
    },
    second: {
      1840: { perPage: 2 },
      1200: { perPage: 1 },
    },
  }

  return {
    type   : 'loop',
    perPage: perPage[content],
    autoplay: true,
    arrows: false,
    breakpoints: breakpoints[content],
  }
}