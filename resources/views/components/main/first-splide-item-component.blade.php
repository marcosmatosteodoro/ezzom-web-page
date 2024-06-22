<li class="splide__slide">
  <div class="splide-group bg-image bri-top" style="background-image: url('images{{ $headline->cover}}')"> 
    <div style="height: 8px">
      @include('components.shared.hr-color-component', ['bg' => 'bg-green', 'orientation' => 'w', 'size' => 'md'])
    </div>

    <article>
      <div class="splide-title">
        <h3>
          {{ $headline->title }}
        </h3>

        <span>
          {{ $headline->created_at }}
        </span>
      </div>

      <div class="splide-arrow">
        <img src="/arrow-left.svg" alt="arrow left" width="20px" height="17.69px" />
      </div>
    </article> 
  </div>
</li>