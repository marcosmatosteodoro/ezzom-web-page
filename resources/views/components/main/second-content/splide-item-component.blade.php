<li class="splide__slide">
  <div class="splide-news-card">

    <div class="splide-news-image">
      <div class="bg-image bri-full splide-news-image-content" style="background-image: url('images{{ $news->cover}}')">
        <div>
          <x-hr-color-component categoryCodeName="{{ $news->category->codeName }}" orientation="w" size="md"/>
        </div>
      </div>
    </div>

    <div class="splide-news-article">
      <div>
        <p>{{ $news->title }}</p>
        <span>{{ $news->date }}</span>
      </div>
      <img src="/icons/arrow-left-black.svg" alt="" width="20px" height="17.69px">
    </div>

  </div>
</li>