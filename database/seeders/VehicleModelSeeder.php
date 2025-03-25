<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use App\Models\VehicleModel;
use Illuminate\Database\Seeder;

class VehicleModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = [
            'Audi' => ['A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'Q3', 'Q5', 'Q7', 'Q8', 'TT', 'R8', 'RS3', 'RS4', 'RS5'],
            'BMW' => ['1 Series', '2 Series', '3 Series', '4 Series', '5 Series', '6 Series', '7 Series', '8 Series', 'X1', 'X3', 'X4', 'X5', 'X6', 'M3', 'M5'],
            'Ferrari' => ['Roma', 'Portofino', 'F8 Tributo', 'SF90 Stradale', '812 Superfast', 'GTC4Lusso', 'Monza SP1', 'Monza SP2', 'LaFerrari', '458 Italia', '488 GTB', '599 GTO', 'California', 'Enzo', 'F12berlinetta'],
            'Ford' => ['Fiesta', 'Focus', 'Mustang', 'Explorer', 'F-150', 'Escape', 'Edge', 'Bronco', 'Ranger', 'Expedition', 'Taurus', 'EcoSport', 'Fusion', 'Flex', 'Transit'],
            'Honda' => ['Civic', 'Accord', 'CR-V', 'Pilot', 'Odyssey', 'Fit', 'HR-V', 'Passport', 'Ridgeline', 'Insight', 'Prelude', 'S2000', 'Element', 'CR-Z', 'Clarity'],
            'Hyundai' => ['Elantra', 'Sonata', 'Tucson', 'Santa Fe', 'Kona', 'Veloster', 'Palisade', 'Accent', 'Ioniq', 'Genesis', 'Veracruz', 'Nexo', 'Azera', 'Equus', 'Xcient'],
            'Jaguar' => ['XE', 'XF', 'XJ', 'E-Pace', 'F-Pace', 'I-Pace', 'F-Type', 'XK', 'XJR', 'S-Type', 'X-Type', 'XJ220', 'E-Type', 'F-Type SVR', 'D-Type'],
            'Kia' => ['Rio', 'Soul', 'Optima', 'Sportage', 'Sorento', 'Telluride', 'Stinger', 'Forte', 'Cadenza', 'K900', 'Niro', 'Seltos', 'Carnival', 'Picanto', 'Cerato'],
            'Lamborghini' => ['Huracan', 'Aventador', 'Urus', 'Gallardo', 'Murcielago', 'Diablo', 'Reventon', 'Sesto Elemento', 'Veneno', 'Centenario', 'Espada', 'Miura', 'Countach', 'Jarama', 'Islero'],
            'Land Rover' => ['Range Rover', 'Range Rover Sport', 'Range Rover Velar', 'Range Rover Evoque', 'Defender', 'Discovery', 'Discovery Sport', 'Freelander', 'LR2', 'LR3', 'LR4', 'Series I', 'Series II', 'Series III', 'Defender 90'],
            'Lexus' => ['ES', 'GS', 'LS', 'NX', 'RX', 'LX', 'IS', 'RC', 'LC', 'UX', 'GX', 'SC', 'CT', 'HS', 'LFA'],
            'Mazda' => ['Mazda2', 'Mazda3', 'Mazda6', 'CX-3', 'CX-5', 'CX-9', 'MX-5', 'RX-7', 'RX-8', 'CX-30', 'B-Series', 'Mazda5', 'Miata', 'Tribute', 'Verisa'],
            'Mercedes-Benz' => ['A-Class', 'B-Class', 'C-Class', 'E-Class', 'S-Class', 'GLA', 'GLC', 'GLE', 'GLS', 'CLA', 'CLS', 'SL', 'AMG GT', 'SLC', 'G-Class'],
            'Mitsubishi' => ['Mirage', 'Lancer', 'Outlander', 'Pajero', 'ASX', 'Eclipse Cross', 'Galant', 'Evolution', 'RVR', 'Endeavor', 'Triton', 'Starion', 'GTO', '3000GT', 'Delica'],
            'Nissan' => ['Altima', 'Maxima', 'Sentra', 'Versa', 'Leaf', 'GT-R', 'Z', 'Rogue', 'Pathfinder', 'Murano', 'Titan', 'Armada', 'Juke', 'Kicks', 'Frontier'],
            'Opel' => ['Astra', 'Corsa', 'Insignia', 'Mokka', 'Zafira', 'Combo', 'Vivaro', 'Grandland X', 'Crossland X', 'Karl', 'Adam', 'Ampera', 'Meriva', 'Vectra', 'Omega'],
            'Peugeot' => ['208', '308', '508', '2008', '3008', '5008', 'Partner', 'Rifter', 'Traveller', 'Expert', 'Bipper', 'iOn', 'Boxer', '106', '405'],
            'Porsche' => ['911', 'Cayenne', 'Macan', 'Panamera', 'Boxster', 'Cayman', 'Taycan', '918 Spyder', 'Carrera GT', '959', '944', '928', '718', 'RS Spyder', '924'],
            'Renault' => ['Clio', 'Megane', 'Kadjar', 'Koleos', 'Talisman', 'Zoe', 'Captur', 'Espace', 'Scenic', 'Laguna', 'Duster', 'Fluence', 'Twingo', 'Modus', 'Vel Satis'],
            'Skoda' => ['Fabia', 'Octavia', 'Superb', 'Karoq', 'Kodiaq', 'Scala', 'Citigo', 'Kamiq', 'Rapid', 'Yeti', 'Enyaq', 'Roomster', 'Felicia', 'Favorit', '120'],
            'Subaru' => ['Impreza', 'Legacy', 'Outback', 'Forester', 'WRX', 'Crosstrek', 'BRZ', 'Ascent', 'Baja', 'Levorg', 'Exiga', 'Tribeca', 'Justy', 'XV', 'GL'],
            'Suzuki' => ['Swift', 'Vitara', 'Baleno', 'Celerio', 'Alto', 'Jimny', 'S-Cross', 'Ignis', 'SX4', 'Ertiga', 'Kizashi', 'Wagon R', 'APV', 'Splash', 'Liana'],
            'Tesla' => ['Model S', 'Model 3', 'Model X', 'Model Y', 'Cybertruck', 'Roadster', 'Semi', 'Powerwall', 'Powerpack', 'Megapack', 'Model A', 'Model B', 'Model C', 'Model D', 'Model E'],
            'Toyota' => ['Corolla', 'Camry', 'Prius', 'Yaris', 'RAV4', 'Highlander', 'Tacoma', 'Tundra', 'Supra', '86', 'C-HR', 'Avalon', 'Sequoia', 'Land Cruiser', '4Runner'],
            'Volkswagen' => ['Golf', 'Polo', 'Passat', 'Jetta', 'Tiguan', 'Touareg', 'Arteon', 'ID.4', 'Beetle', 'Scirocco', 'Sharan', 'Touran', 'T-Cross', 'Transporter', 'Up!'],
            'Volvo' => ['XC40', 'XC60', 'XC90', 'S60', 'S90', 'V60', 'V90', 'C30', 'C70', 'S40', 'V40', '850', '940', '960', 'P1800'],
        ];

        foreach ($models as $makeName => $models) {
            $make = Manufacturer::where('name', $makeName)->first();

            if ($make) {
                foreach ($models as $model) {
                    VehicleModel::create([
                        'manufacturer_id' => $make->id,
                        'name' => $model
                    ]);
                }
            }
        }
    }
}