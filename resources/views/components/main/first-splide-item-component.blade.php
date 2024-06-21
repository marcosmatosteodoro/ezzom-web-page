<li class="splide__slide">
  <div class="splide-group" style="background-image: url('{{ $image }}')"> 
    <div style="height: 8px">
      @include('components.shared.hr-color-component', ['bg' => $bg, 'orientation' => 'w', 'size' => 'md'])
    </div>

    <article>
      <div class="splide-title">
        <h3>
          {{ $title }}
        </h3>

        <span>
          {{ $date }}
        </span>
      </div>

      <div class="splide-arrow">
        <img src="/arrow-left.svg" alt="arrow left" width="20px" height="17.69px" />
      </div>
    </article> 
  </div>
</li>