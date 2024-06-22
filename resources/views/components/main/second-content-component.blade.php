<section id="second-content">
  <div id="card-news-group">
    @each('components.main.card-news-component', $categoriesWithNews, 'category')
  </div>
</section>