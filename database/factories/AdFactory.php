<?php

namespace Database\Factories;

<<<<<<< HEAD
use App\Models\Ad;
=======
>>>>>>> 3f589972068e82ec33911d7b1e0609d91f82408c
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
<<<<<<< HEAD
    protected $model = Ad::class;

=======
>>>>>>> 3f589972068e82ec33911d7b1e0609d91f82408c
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
<<<<<<< HEAD
=======

>>>>>>> 3f589972068e82ec33911d7b1e0609d91f82408c
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'category_id' => Category::factory(),
            'location' => $this->faker->city,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'negotiable' => $this->faker->boolean,
            'condition' => $this->faker->randomElement(['New', 'Used']),
<<<<<<< HEAD
            'images' => null, // You may modify this based on your specific needs
        ];
    }
}
=======
            'images' =>  $this->faker->imageURL(800, 600, 'cats', true, true), // You may modify this based on your specific needs
       
        ];
    }
}
>>>>>>> 3f589972068e82ec33911d7b1e0609d91f82408c
