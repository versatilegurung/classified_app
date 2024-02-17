<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            'Electronics', 'Furniture', 'Clothing & Accessories', 'Home & Garden',
            'Appliances', 'Sports & Outdoors', 'Musical Instruments', 'Toys & Games',
            'Cars', 'Bikes/Motorcycles', 'Trucks & SUVs', 'Boats & Watercraft',
            'Bicycles', 'House/Room/Flat For Sale',
            'House/Room/Flat For Rent', 'Commercial Property', 'Land & Plots',
            'Jobs Full-time', 'Jobs Part-time', 'Temporary Jobs', 'Home Services',
            'Beauty & Spa', 'Cleaning', 'Health & Wellness', 'Event Services',
            'Tutoring & Lessons', 'Garage Sales', 'Dogs', 'Cats', 'Pet Services',
            'Pet Accessories', 'Mobile Phones', 'Computers & Laptops',
            'Cameras & Photography', 'Audio & Video Equipment',
            'Antiques & Collectibles', 'Arts & Crafts',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

    }
}
