<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::truncate();
        Car::create([
            'id' => 'avanza',
            'name' => 'Toyota Avanza',
            'brand' => 'Toyota',
            'type' => 'MPV',
            'price' => 350000,
            'image' => '/images/cars/avanza.png',
            'capacity' => 7,
            'transmission' => json_encode(['Manual', 'Automatic']), // supports both
            'fuelType' => 'Bensin',
            'year' => 2020,
            'shortDescription' => 'MPV 7 seater yang nyaman dan ekonomis untuk perjalanan keluarga',
            'description' => 'Toyota Avanza adalah mobil MPV yang nyaman dan ekonomis, cocok untuk perjalanan keluarga atau rombongan kecil. Dengan kapasitas 7 penumpang, ruang kabin yang lega, dan konsumsi bahan bakar yang efisien, Avanza menjadi pilihan tepat untuk perjalanan dalam kota maupun luar kota.',
            'features' => json_encode([
                'AC Double Blower',
                'Audio System',
                'Power Window',
                'Power Steering',
                'Kursi Lipat',
                'Bagasi Luas',
            ]),
            'isShowing' => true,
        ]);
        Car::create([
            'id' => 'innova',
            'name' => 'Toyota Innova',
            'brand' => 'Toyota',
            'type' => 'MPV',
            'price' => 500000,
            'image' => '/images/cars/innova.png',
            'capacity' => 7,
            'transmission' => json_encode(['Automatic']),
            'fuelType' => 'Diesel',
            'year' => 2021,
            'shortDescription' => 'MPV premium dengan kenyamanan dan performa terbaik',
            'description' => 'Toyota Innova adalah MPV premium yang menawarkan kenyamanan dan performa terbaik di kelasnya. Dengan mesin diesel yang bertenaga dan transmisi otomatis yang halus, Innova memberikan pengalaman berkendara yang nyaman untuk perjalanan jarak jauh. Interior yang luas dan fitur keselamatan lengkap menjadikannya pilihan ideal untuk keluarga.',
            'features' => json_encode([
                'AC Triple Blower',
                'Audio System Touchscreen',
                'Power Window',
                'Power Steering',
                'Kursi Captain Seat',
                'Airbag',
            ]),
            'isShowing' => false,
        ]);
        Car::create([
            'id' => 'hiace',
            'name' => 'Toyota Hiace',
            'brand' => 'Toyota',
            'type' => 'Minibus',
            'price' => 1200000,
            'image' => '/images/cars/hiace.png',
            'capacity' => 14,
            'transmission' => json_encode(['Manual']),
            'fuelType' => 'Diesel',
            'year' => 2019,
            'shortDescription' => 'Minibus dengan kapasitas besar untuk rombongan',
            'description' => 'Toyota Hiace adalah minibus dengan kapasitas besar yang ideal untuk rombongan atau grup wisata. Dengan kapasitas hingga 14 penumpang, Hiace menawarkan ruang yang lega dan nyaman untuk perjalanan jarak jauh. Dilengkapi dengan AC yang dingin dan kursi yang empuk, Hiace menjamin kenyamanan selama perjalanan.',
            'features' => json_encode([
                'AC Central',
                'Audio System',
                'Kursi Reclining',
                'Bagasi Luas',
                'Power Window',
                'Power Steering',
            ]),
            'isShowing' => true,
        ]);
        Car::create([
            'id' => 'fortuner',
            'name' => 'Toyota Fortuner',
            'brand' => 'Toyota',
            'type' => 'SUV',
            'price' => 900000,
            'image' => '/images/cars/fortuner.png',
            'capacity' => 7,
            'transmission' => json_encode(['Automatic', 'Manual']), // supports both
            'fuelType' => 'Diesel',
            'year' => 2021,
            'shortDescription' => 'SUV premium dengan performa dan tampilan mewah',
            'description' => 'Toyota Fortuner adalah SUV premium yang menggabungkan performa tangguh dan tampilan mewah. Dengan ground clearance tinggi dan sistem 4x4, Fortuner mampu melalui berbagai medan dengan mudah. Interior yang luas dan mewah dengan fitur keselamatan lengkap menjadikannya pilihan tepat untuk perjalanan keluarga maupun bisnis.',
            'features' => json_encode([
                'AC Dual Zone',
                'Audio System Touchscreen',
                'Power Window',
                'Power Steering',
                'Leather Seat',
                'Airbag',
            ]),
            'isShowing' => true,
        ]);
        Car::create([
            'id' => 'alphard',
            'name' => 'Toyota Alphard',
            'brand' => 'Toyota',
            'type' => 'MPV',
            'price' => 1500000,
            'image' => '/images/cars/alphard.png',
            'capacity' => 7,
            'transmission' => json_encode(['Automatic']),
            'fuelType' => 'Bensin',
            'year' => 2020,
            'shortDescription' => 'MPV mewah dengan kenyamanan setara kelas premium',
            'description' => 'Toyota Alphard adalah MPV mewah yang menawarkan kenyamanan setara kelas premium. Dengan interior yang luas dan mewah, kursi captain seat yang nyaman, serta berbagai fitur hiburan dan keselamatan canggih, Alphard memberikan pengalaman berkendara yang luar biasa. Cocok untuk perjalanan bisnis, keluarga, atau acara spesial.',
            'features' => json_encode([
                'AC Triple Zone',
                'Audio System Premium',
                'Power Door',
                'Captain Seat',
                'Leather Seat',
                'Sunroof',
            ]),
            'isShowing' => true,
        ]);
        Car::create([
            'id' => 'xpander',
            'name' => 'Mitsubishi Xpander',
            'brand' => 'Mitsubishi',
            'type' => 'MPV',
            'price' => 400000,
            'image' => '/images/cars/xpander.png',
            'capacity' => 7,
            'transmission' => json_encode(['Automatic']),
            'fuelType' => 'Bensin',
            'year' => 2021,
            'shortDescription' => 'MPV modern dengan desain stylish dan fitur lengkap',
            'description' => 'Mitsubishi Xpander adalah MPV modern dengan desain stylish dan fitur lengkap. Dengan ground clearance tinggi dan kabin yang lega, Xpander menawarkan kenyamanan maksimal untuk seluruh penumpang. Dilengkapi dengan berbagai fitur keselamatan dan hiburan, Xpander menjadi pilihan tepat untuk keluarga modern.',
            'features' => json_encode([
                'AC Double Blower',
                'Audio System Touchscreen',
                'Power Window',
                'Power Steering',
                'Kursi Lipat',
                'Bagasi Luas',
            ]),
            'isShowing' => true,
        ]);
        Car::create([
            'id' => 'pajero',
            'name' => 'Mitsubishi Pajero Sport',
            'brand' => 'Mitsubishi',
            'type' => 'SUV',
            'price' => 850000,
            'image' => '/images/cars/pajero.png',
            'capacity' => 7,
            'transmission' => json_encode(['Automatic']),
            'fuelType' => 'Diesel',
            'year' => 2020,
            'shortDescription' => 'SUV tangguh dengan performa dan kenyamanan premium',
            'description' => 'Mitsubishi Pajero Sport adalah SUV tangguh dengan performa dan kenyamanan premium. Dengan mesin diesel bertenaga dan sistem 4x4 yang handal, Pajero Sport mampu melalui berbagai medan dengan mudah. Interior yang luas dan mewah dengan berbagai fitur canggih menjadikannya pilihan tepat untuk petualangan keluarga.',
            'features' => json_encode([
                'AC Dual Zone',
                'Audio System Touchscreen',
                'Power Window',
                'Power Steering',
                'Leather Seat',
                'Airbag',
            ]),
            'isShowing' => true,
        ]);
        Car::create([
            'id' => 'brv',
            'name' => 'Honda BR-V',
            'brand' => 'Honda',
            'type' => 'SUV',
            'price' => 400000,
            'image' => '/images/cars/brv.png',
            'capacity' => 7,
            'transmission' => json_encode(['Automatic']),
            'fuelType' => 'Bensin',
            'year' => 2021,
            'shortDescription' => 'Crossover SUV kompak dengan 7 kursi dan fitur lengkap',
            'description' => 'Honda BR-V adalah crossover SUV kompak dengan 7 kursi dan fitur lengkap. Dengan ground clearance tinggi dan desain yang stylish, BR-V menawarkan kenyamanan dan kepraktisan untuk keluarga. Dilengkapi dengan berbagai fitur keselamatan dan hiburan, BR-V menjadi pilihan tepat untuk perjalanan dalam kota maupun luar kota.',
            'features' => json_encode([
                'AC Double Blower',
                'Audio System Touchscreen',
                'Power Window',
                'Power Steering',
                'Kursi Lipat',
                'Bagasi Luas',
            ]),
            'isShowing' => true,
        ]);
        Car::create([
            'id' => 'crv',
            'name' => 'Honda CR-V',
            'brand' => 'Honda',
            'type' => 'SUV',
            'price' => 750000,
            'image' => '/images/cars/crv.png',
            'capacity' => 5,
            'transmission' => json_encode(['Automatic']),
            'fuelType' => 'Bensin',
            'year' => 2021,
            'shortDescription' => 'SUV premium dengan kenyamanan dan teknologi canggih',
            'description' => 'Honda CR-V adalah SUV premium yang menawarkan kenyamanan dan teknologi canggih. Dengan desain elegan dan interior yang luas, CR-V memberikan pengalaman berkendara yang nyaman dan mewah. Dilengkapi dengan berbagai fitur keselamatan dan hiburan terkini, CR-V menjadi pilihan tepat untuk keluarga modern.',
            'features' => json_encode([
                'AC Dual Zone',
                'Audio System Touchscreen',
                'Power Window',
                'Power Steering',
                'Leather Seat',
                'Airbag',
            ]),
            'isShowing' => true,
        ]);
        Car::create([
            'id' => 'jazz',
            'name' => 'Honda Jazz',
            'brand' => 'Honda',
            'type' => 'Hatchback',
            'price' => 350000,
            'image' => '/images/cars/jazz.png',
            'capacity' => 5,
            'transmission' => json_encode(['Automatic']),
            'fuelType' => 'Bensin',
            'year' => 2020,
            'shortDescription' => 'Hatchback kompak dengan kepraktisan dan efisiensi tinggi',
            'description' => 'Honda Jazz adalah hatchback kompak yang menawarkan kepraktisan dan efisiensi tinggi. Dengan desain modern dan ruang interior yang lega, Jazz memberikan kenyamanan maksimal untuk pengendara dan penumpang. Fitur Ultra Seat yang fleksibel memungkinkan konfigurasi kursi sesuai kebutuhan. Ideal untuk mobilitas di perkotaan dengan konsumsi bahan bakar yang efisien.',
            'features' => json_encode([
                'AC Digital',
                'Audio System Touchscreen',
                'Power Window',
                'Power Steering',
                'Ultra Seat',
                'Keyless Entry',
            ]),
            'isShowing' => true,
        ]);
    }
}
