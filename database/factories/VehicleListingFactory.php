<?php

namespace Database\Factories;

use App\Models\VehicleModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VehicleListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vehicle_model_id' => array_rand(VehicleModel::all()->pluck('id')->toArray()),
            'price' => $this->faker->random_int(2000, 150000),
            'fuel_type' => array_rand(['gasoline', 'petrol', 'hybrid', 'electric']),
            'gear' => array_rand(['automatic', 'manual']),
            'traction' => array_rand(['AWD', 'FWD', 'RWD', '4X4']),
            'cubic_capacity' => array_rand([1000, 1500, 1600, 1700, 2000, 3000, 40000]),
            'mileage' => $this->faker->random_int(0, 400000),
            'vehichle_type' => array_rand(['saloon', 'estate', 'coupe', 'minibus', 'small car', 'SUV', 'Cabriolet' ]),
            'production_date' => $this->faker->date(),
        ];
    }
}
