<?php

namespace Database\Factories;

use App\Models\Ad;
use App\Models\User;
use App\Models\AdImage;
use App\Models\Category;
use App\Models\Location;
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


        return [
            'user_id' => User::factory(),
            // 'user_id' => $this->faker->numberBetween(1, 12),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'category_id' => $this->faker->numberBetween(2, 9),
            // 'category_id' => Category::factory(),
            // 'location' => Location::factory(),
            // 'location_id' => $this->faker->numberBetween(10, 20),
            'district_id' => $this->faker->numberBetween(1, 75),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'negotiable' => $this->faker->boolean,
            'featured' => $this->faker->boolean,
            'is_sold' => $this->faker->boolean,
            'condition' => $this->faker->randomElement(['new', 'used']),
            'published' => true,
        ];
    }
}
