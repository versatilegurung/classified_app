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

        // $cities = [
        //     "Dhangadhi", "Tikapur", "Ghodaghodi", "Bhajani", "Lamki", "Kailari",
        //     "Mangalsen", "Kamalbazar", "Mellekh", "Dhakari", "Sanphebagar", "Mangalsen",
        //     "Dipayal", "Silgadhi", "Jorayal", "K I Singh", "Shikhar",
        //     "Jayaprithivi", "Khetasar", "Khaptad Chhanna", "Surma", "Durgathali",
        //     "Martadi", "Tate",
        //     "Bhimdatta", "Mahendranagar", "Belauri", "Laljhadi", "Shuklaphanta",
        //     "Amargadhi", "Alital", "Ajayameru", "Nirbhaypuri", "Parashuram",
        //     "Dasharathchand", "Melauli", "Bhaise", "Juhar",
        //     "Malikarjun", "Darchula", "Api",
        //     "Musikot",
        //     "Sharada", "Siddheswor",
        //     "Dunai", "Tripurakot", "Soruk",
        //     "Simikot", "Muchu", "Lali", "Kharpunath",
        //     "Jumla", "Khalanga", "Chandannath", "Tatopani",
        //     "Manma", "Ransi", "Kotbada",
        //     "Gumgadhi", "Kale",
        //     "Birendranagar", "Chaukune", "Gumi", "Lekbeshi",
        //     "Narayan", "Nawarpani", "Aathbis", "Bhagatpur",
        //     "Bheri", "Chhedagad",
        //     "Taulihawa", "Banganga", "Krishnanagar", "Suddodhan",
        //     "Bardaghat", "Bulingtar", "Rambhapur", "Pithauli",
        //     "Butwal", "Lumbini", "Siddharthanagar", "Devdaha",
        //     "Sandhikharka", "Sitganga", "Thada",
        //     "Tamghas", "Resunga", "Kashigaun",
        //     "Tansen", "Rampur", "Lumdikuwa",
        //     "Ghorahi", "Tulsipur", "Rihar",
        //     "Pyuthan", "Mandavi",
        //     "Liwang", "Duikholi", "Sunchhari",
        //     "Rukumkot",
        //     "Nepalgunj", "Kohalpur", "Khajura", "Baijapur",
        //     "Gulariya", "Thakurdwara", "Jamuni", "Basgadhi",
        //     "Baglung", "Galkot", "Badigad",
        //     "Gorkha", "Manakamana", "Palungtar",
        //     "Pokhara", "Lekhnath", "Machapuchare", "Annapurna",
        //     "Besisahar", "Madhya Nepal", "Kunchha",
        //     "Chame", "Manang",
        //     "Jomsom", "Lo Manthang", "Marpha",
        //     "Beni", "Dana",
        //     "Kawasoti", "Devchuli", "Madhyabindu", "Sarawal",
        //     "Kushma", "Phalebas", "Bihadi",
        //     "Waling", "Bhirkot", "Chapakot",
        //     "Damauli", "Bhimad", "Bhanubhakta",
        //     "Kamalamai", "Hariharpurgaghi", "Dudhauli",
        //     "Manthali", "Khadadevi", "Doramba",
        //     "Charikot", "Baiteshwor", "Melung",
        //     "Bhaktapur", "Changunarayan", "Suryabinayak",
        //     "Dhadingbesi", "Benighat", "Rubi Valley", "Jwalamuk"
        // ];
        

        $cities = [
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

        foreach ($cities as $city) {
            Location::create(['name' => $city]);
        }
    }
}
