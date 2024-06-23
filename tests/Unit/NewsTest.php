<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Headline;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_news()
    {
        $news = News::factory()->create([
            'title' => 'Sample News',
        ]);

        $this->assertNotNull($news);
        $this->assertInstanceOf(News::class, $news);
        $this->assertEquals('Sample News', $news->title);
    }

    /** @test */
    public function it_belongs_to_a_category()
    {
        $category = Category::factory()->create();
        $news = News::factory()->create([
            'category_id' => $category->id,
        ]);

        $this->assertInstanceOf(Category::class, $news->category);
        $this->assertEquals($category->id, $news->category->id);
    }

    /** @test */
    public function it_can_scope_just_headlines()
    {
        $newsWithHeadlines = News::factory()->count(3)->create();
        $newsWithoutHeadlines = News::factory()->count(2)->create();

        $newsWithHeadlines->each(function ($news) {
            Headline::factory()->create(['news_id' => $news->id]);
        });

        $filteredNews = News::justHeadlines()->get();

        $this->assertCount(3, $newsWithHeadlines);
        $this->assertCount(3, $filteredNews);
    }

    /** @test */
    public function it_can_scope_no_headlines()
    {
        $newsWithHeadlines = News::factory()->count(3)->create();
        $newsWithoutHeadlines = News::factory()->count(2)->create();

        $newsWithHeadlines->each(function ($news) {
            Headline::factory()->create(['news_id' => $news->id]);
        });

        $filteredNews = News::noHeadlines()->get();

        $this->assertCount(2, $newsWithoutHeadlines);
        $this->assertCount(2, $filteredNews);
    }
}
