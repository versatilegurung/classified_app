<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // category seeder
        $this->call(CategoriesTableSeeder::class);

        //location seeder
        $this->call(LocationSeeder::class);
    }
}
