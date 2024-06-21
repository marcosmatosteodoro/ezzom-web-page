<div class="card-news">
  <div class="grid-news">
    <div class="hr-vertical">
      @include('components.shared.hr-color-component', ['bg' => 'bg-green', 'orientation' => 'h', 'size' => 'lg'])
    </div>

    <div class="grid-news-content">

      <article class="grid-news-article">
        <h1>Esportes</h1>
        <p>Lorem Ipsum dolor Sit Amet Lorem</p>

        <button type="button" class="button-outline outline-black">
          Ver Todos
        </button>

      </article>

      <div class="carrossel">
        <div id="second-content-splide-{{ $id }}" class="splide second-content-splide ">
          <div class="splide__track">
            <ul class="splide__list">
              @include('components.main.second-splide-item-component')
              @include('components.main.second-splide-item-component')
              @include('components.main.second-splide-item-component')
            </ul>
          </div>
        </div>
      </div>
    </div>

    
  </div>
</div>