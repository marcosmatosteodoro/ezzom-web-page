<li class="splide__slide">
  <div class="card-splide-group">
    <div class="bg-image-div">
      <div class="bg-image-content bg-image bri-full" style="background-image: url('/images/image2.jpeg');">
        <div class="divider">
          @include('components.shared.hr-color-component', ['bg' => 'bg-green', 'orientation' => 'w', 'size' => 'md'])
        </div>
      </div>
    </div>
    
    <article class="slide-article">
      <div class="splide-title">
        <h3>
          {{ 'Lorem Ipsum dolor Sit Amet Dolor lorem ipsum' }}
        </h3>

        <span>
          {{ '10 de Abril 2023' }}
        </span>
      </div>

      <div class="splide-arrow">
        <img src="/arrow-left-black.svg" alt="arrow left" width="20px" height="17.69px" />
      </div>
    </article> 

  </div>

</li>