<div class="card-news-container">
  <div class="card-news-content">
    <div class="divider">
      <x-hr-color-component categoryCodeName="{{ $category->codeName }}" orientation="h" size="lg"/>
    </div>

    <div class="card-news-body">
      <div class="card-news-info">
        <h3>{{ $category->title }}</h3>
        <p>{{ $category->description }}</p>
        <button class="button-outline outline-black" type="button">
          VER TODOS
        </button>
      </div>

      <div class="card-news-carrossel">
        <div id="second-content-splide-{{ $category->id }}" class="splide second-content-splide">
          <div class="splide__track">
            <ul class="splide__list">
              @each('components.main.second-splide-item-component', $category->news, 'news')
          </div>
        </div>
      </div>
    </div>

  </div>
</div>