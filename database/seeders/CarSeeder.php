<?php

// database/seeders/CarSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run()
    {
        Car::create([
            'brand' => 'Toyota',
            'model' => 'Kijang Inova',
            'year' => 2020,
            'price' => 396210000,
            'description' => 'A reliable car.',
            'color' => 'Red',
            'number_of_seats' => 8,
            'transmission' => 'Automatic',
            'bahan_bakar' => 'Diesel', // Tambahkan bahan bakar sesuai kebutuhan
            'image_url' => 'img/inova.png'
        ]);

        Car::create([
            'brand' => 'Honda',
            'model' => 'Civic',
            'year' => 2020,
            'price' => 875000000,
            'description' => 'A sporty car.',
            'color' => 'White',
            'number_of_seats' => 4,
            'transmission' => 'Manual',
            'bahan_bakar' => 'Bensin', // Tambahkan bahan bakar sesuai kebutuhan
            'image_url' => 'img/civic.jpg'
        ]);

        Car::create([
            'brand' => 'Toyota',
            'model' => 'Alphard',
            'year' => 2024,
            'price' => 1711000000,
            'description' => 'A Family Car.',
            'color' => 'Black',
            'number_of_seats' => 14,
            'transmission' => 'Manual',
            'bahan_bakar' => 'Bensin', // Tambahkan bahan bakar sesuai kebutuhan
            'image_url' => 'img/alphard.png'
        ]);

        Car::create([
            'brand' => 'Hyundai',
            'model' => 'Ionic 6',
            'year' => 2022,
            'price' => 1200000000,
            'description' => 'A Sport Car.',
            'color' => 'Silver',
            'number_of_seats' => 4,
            'transmission' => 'Manual',
            'bahan_bakar' => 'Baterai', // Tambahkan bahan bakar sesuai kebutuhan
            'image_url' => 'img/ionic.png'
        ]);

        Car::create([
            'brand' => 'Tesla',
            'model' => 'Tesla x',
            'year' => 2024,
            'price' => 1200000000,
            'description' => 'A Sport Car.',
            'color' => 'White',
            'number_of_seats' => 4,
            'transmission' => 'Manual',
            'bahan_bakar' => 'Baterai', // Tambahkan bahan bakar sesuai kebutuhan
            'image_url' => 'img/tesla.png'
        ]);
    }
}
