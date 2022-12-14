<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'content' => $this->faker->text,
            'preview_image' => $this->faker->imageUrl,
            'main_image' => $this->faker->imageUrl,
//            'category_id' => Category::get()->random()->id,
            'category_id' => Category::query()->inRandomOrder()->value('id'),
        ];
    }
}
