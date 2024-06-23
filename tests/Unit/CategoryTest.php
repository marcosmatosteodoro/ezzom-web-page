<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_category()
    {
        $category = Category::factory()->create();

        $this->assertNotNull($category);
        $this->assertInstanceOf(Category::class, $category);
    }

    /** @test */
    public function it_can_have_multiple_news()
    {
        $category = Category::factory()
            ->has(News::factory()->count(3))
            ->create();

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $category->news);
        $this->assertCount(3, $category->news);
    }

    /** @test */
    // public function it_can_load_news_with_headlines()
    // {
    //     $categoryWithHeadlines = Category::factory()
    //         ->has(News::factory()->count(3), ['headline' => true])
    //         ->create();
    //     $categoryWithoutHeadlines = Category::factory()
    //         ->has(News::factory()->count(2))
    //         ->create();

    //     // $categoriesWithHeadlines = Category::withNews()->get();
    //     print('xxxxxxxxxxxxxxx');
    //     $this->assertCount(1, $categoriesWithHeadlines); // Apenas uma categoria deve ter manchetes
    //     $this->assertCount(3, $categoriesWithHeadlines->first()->news); // Verifica se as notícias com manchetes foram carregadas

    //     $categoriesWithoutHeadlines = Category::withNews(false)->get();
    //     $this->assertCount(1, $categoriesWithoutHeadlines); // Apenas uma categoria não deve ter manchetes
    //     $this->assertCount(2, $categoriesWithoutHeadlines->first()->news); // Verifica se as notícias sem manchetes foram carregadas
    // }
}
