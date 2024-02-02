<?php

namespace Database\Factories;

<<<<<<< HEAD
use App\Models\Category;
=======
>>>>>>> 3f589972068e82ec33911d7b1e0609d91f82408c
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
<<<<<<< HEAD
    protected $model = Category::class;
=======
>>>>>>> 3f589972068e82ec33911d7b1e0609d91f82408c
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->word,
<<<<<<< HEAD
        ];
    }
}
=======

        ];
    }
}
>>>>>>> 3f589972068e82ec33911d7b1e0609d91f82408c
