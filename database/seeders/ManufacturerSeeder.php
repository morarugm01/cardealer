<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $manufacturers = [
            'Audi',
            'BMW',
            'Ferrari',
            'Ford',
            'Honda',
            'Hyundai',
            'Jaguar',
            'Kia',
            'Lamborghini',
            'Land Rover',
            'Lexus',
            'Mazda',
            'Mercedes-Benz',
            'Mitsubishi',
            'Nissan',
            'Opel',
            'Peugeot',
            'Porsche',
            'Renault',
            'Skoda',
            'Subaru',
            'Suzuki',
            'Tesla',
            'Toyota',
            'Volkswagen',
            'Volvo',
        ];

        foreach ($manufacturers as $manufacturer) {
            Manufacturer::create(['name' => $manufacturer]);
        }
    }
}
