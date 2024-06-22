<main>
    @include("components.main.first-content-component", ['headlines' => $headlines])
    @include("components.main.second-content-component", ['categoriesWithNews' => $categoriesWithNews])
</main>