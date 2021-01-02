<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\NewsCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->randomElement(NewsCategory::all()->pluck('category_id')->toArray()),
            'title' => $this->faker->unique()->streetName(),
            'description' => $this->faker->text(20),
            'content' => $this->faker->text(100),
        ];
    }
}
