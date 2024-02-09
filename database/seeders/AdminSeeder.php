<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //seed admin login details
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'me@subash.co.uk',
            'password' => bcrypt('password'),
            'role' => 'superadmin'
        ]);
    }
}
