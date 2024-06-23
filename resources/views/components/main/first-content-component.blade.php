<section id="first-content">
  <div id="first-content-splide" class="splide">
    <div class="splide__track">
      <ul class="splide__list">
        @each('components.main.first-content.splide-item-component', $headlines, 'headline')
    </div>
  </div>
</section>