<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Ad::factory(10)->create();


        // Role::create([
        //     'name' => 'User',
        // ]);
        \App\Models\User::factory(1)->create();
        \App\Models\AdImage::factory(10)->create();
        
    }
}
