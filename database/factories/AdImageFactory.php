<?php

namespace Database\Factories;

use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\Factory;

use function Livewire\store;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdImage>
 */
class AdImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $image = $this->faker->image(storage_path("app/public/ad_images"), 300, 200, 'chitwanbuyandsell', false);
        $imagePath = 'ad_images/' . $image;

        return [
            //
            'image' => $imagePath,
            'ad_id' => Ad::factory(),
        ];
    }
}
