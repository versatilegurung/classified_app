<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $locations = [
            'Kathmandu',
            'Pokhara',
            'Chitwan',
            'Biratnagar',
            'Birgunj',
            'Butwal',
            'Hetauda',
            'Dharan',
            'Nepalgunj',
            'Itahari',
            'Dhangadhi',
            'Bharatpur',
            'Janakpur',
            'Bhaktapur',
            'Lalitpur',
            'Nawalparasi',
            'Sunsari',
            'Morang',
            'Kailali',
            'Kaski',
            'Rupandehi',
            'Jhapa',
            'Sarlahi',
            'Mahottari',
            'Saptari',
            'Siraha',
            'Dhanusha',
            'Bara',
            'Parsa',
            'Rautahat',
            'Makwanpur',
            'Sindhuli',
            'Sindhupalchok',
            'Kavrepalanchok',
            'Dolakha',
            'Ramechhap',
            'Okhaldhunga',
            'Ratnanagar',
            'Birendrangar'           
        ];

        foreach ($locations as $location) {
            Location::create(['name' => $location]);
        }
    }
}
