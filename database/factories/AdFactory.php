<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imagePath = $this->faker->image(storage_path('app/public/ad_images'), 200, 200, 'chitwanbuyandsell', true);


        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'category_id' => Category::factory(),
            'location' => $this->faker->city,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'negotiable' => $this->faker->boolean,
            'featured' => $this->faker->boolean,
            'condition' => $this->faker->randomElement(['New', 'Used']),
            'images' =>  $imagePath,
            'published' => $this->faker->boolean,
        ];
    }
}
