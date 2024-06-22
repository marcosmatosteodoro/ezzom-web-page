<div class="card-news">
  <div class="grid-news">
    <div class="hr-vertical">
      <x-hr-color-component categoryCodeName="{{ $category->codeName }}" orientation="h" size="lg"/>
    </div>

    <div class="grid-news-content">

      <article class="grid-news-article">
        <h1>{{ $category->title }}</h1>
        {{-- adicionar descrição em category --}}
        <p>Lorem Ipsum dolor Sit Amet Lorem</p>

        <button type="button" class="button-outline outline-black">
          Ver Todos
        </button>

      </article>

      <div class="carrossel">
        <div id="second-content-splide-{{ $category->id }}" class="splide second-content-splide ">
          <div class="splide__track">
            <ul class="splide__list">
              @each('components.main.second-splide-item-component', $category->news, 'news')
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>