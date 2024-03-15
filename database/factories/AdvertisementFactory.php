<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Advertisement>
 */
class AdvertisementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $adImage = $this->faker->image(storage_path("app/public/advertisement_images"), 300, 200, 'chitwanbuyandsell', false);
        $imagePath = 'advertisement_images/' . $adImage;
        return [
            //create fake advertisement data

            'title' => $this->faker->sentence,
            'image' => $imagePath,
            'url' => $this->faker->url,
            'position' => $this->faker->randomElement(['top', 'bottom', 'left', 'right']),
            'start_date' => now(),
            'end_date' => now()->addDays(30),
            'status' => true,

        ];
    }
}
