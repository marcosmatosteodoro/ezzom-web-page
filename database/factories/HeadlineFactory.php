<?php

namespace Database\Factories;

use App\Models\Headline;
use Illuminate\Database\Eloquent\Factories\Factory;

class HeadlineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Headline::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'position' => $this->faker->unique()->numberBetween(1, 10),
            'news_id' => \App\Models\News::factory(),
        ];
    }
}
