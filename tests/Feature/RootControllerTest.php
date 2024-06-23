<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RootControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_loads_root_page_with_correct_status()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
