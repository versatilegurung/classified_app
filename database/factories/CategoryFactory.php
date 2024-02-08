<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{

    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'name' => $this->faker->unique()->randomElement([
                    'Electronics', 'Furniture', 'Clothing & Accessories', 'Home & Garden',
                    'Appliances', 'Sports & Outdoors', 'Musical Instruments', 'Toys & Games',
                    'Cars', 'Motorcycles', 'Trucks & SUVs', 'Boats & Watercraft',
                    'RVs & Campers', 'Bicycles', 'House/Room/Flat For Sale',
                    'House/Room/Flat For Rent', 'Commercial Property', 'Land & Plots',
                    'Jobs Full-time', 'Jobs Part-time', 'Temporary Jobs', 'Home Services',
                    'Beauty & Spa', 'Cleaning', 'Health & Wellness', 'Event Services',
                    'Tutoring & Lessons', 'Garage Sales', 'Dogs', 'Cats', 'Pet Services',
                    'Pet Accessories', 'Mobile Phones', 'Computers & Laptops',
                    'Cameras & Photography', 'Audio & Video Equipment',
                    'Antiques & Collectibles', 'Arts & Crafts',
                ]),
            ];
    }

}