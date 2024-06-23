<?php

namespace Tests\Unit;

use App\Models\Headline;
use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HeadlineTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_headline()
    {
        $headline = Headline::factory()->create([
            'position' => 1,
        ]);

        $this->assertNotNull($headline);
        $this->assertInstanceOf(Headline::class, $headline);
        $this->assertEquals(1, $headline->position);
    }

    /** @test */
    public function it_belongs_to_news()
    {
        $news = News::factory()->create();
        $headline = Headline::factory()->create([
            'news_id' => $news->id,
        ]);

        $this->assertInstanceOf(News::class, $headline->news);
        $this->assertEquals($news->id, $headline->news->id);
    }

    /** @test */
    public function it_can_scope_ordered()
    {
        Headline::factory()->create(['position' => 3]);
        Headline::factory()->create(['position' => 1]);
        Headline::factory()->create(['position' => 2]);

        $orderedHeadlines = Headline::ordered()->get();

        $this->assertEquals([1, 2, 3], $orderedHeadlines->pluck('position')->toArray());
    }
}
