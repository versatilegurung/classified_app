<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $this->command->info('Seeding districts of Nepal...');

        $districts = [
            'Achham',
            'Arghakhanchi',
            'Baglung',
            'Baitadi',
            'Bajhang',
            'Bajura',
            'Banke',
            'Bara',
            'Bardiya',
            'Bhaktapur',
            'Bhojpur',
            'Chitwan',
            'Dadeldhura',
            'Dailekh',
            'Dang',
            'Darchula',
            'Dhading',
            'Dhankuta',
            'Dhanusa',
            'Dolakha',
            'Dolpa',
            'Doti',
            'Eastern Rukum',
            'Gorkha',
            'Gulmi',
            'Humla',
            'Ilam',
            'Jajarkot',
            'Jhapa',
            'Jumla',
            'Kailali',
            'Kalikot',
            'Kanchanpur',
            'Kapilvastu',
            'Kaski',
            'Kathmandu',
            'Kavrepalanchowk',
            'Khotang',
            'Lalitpur',
            'Lamjung',
            'Mahottari',
            'Makwanpur',
            'Manang',
            'Morang',
            'Mugu',
            'Mustang',
            'Myagdi',
            'Nawalpur',
            'Nuwakot',
            'Okhaldhunga',
            'Palpa',
            'Panchthar',
            'Parasi',
            'Parbat',
            'Parsa',
            'Pyuthan',
            'Ramechhap',
            'Rasuwa',
            'Rautahat',
            'Rolpa',
            'Rupandehi',
            'Salyan',
            'Sankhuwasabha',
            'Saptari',
            'Sarlahi',
            'Sindhuli',
            'Sindhupalchok',
            'Siraha',
            'Solukhumbu',
            'Sunsari',
            'Surkhet',
            'Syangja',
            'Tanahu',
            'Taplejung',
            'Tehrathum',
            'Udayapur',
            'Western Rukum'         
        ];

        foreach ($districts as $district) {
            District::create(['name' => $district]);
        }
    }
}
