<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plane;

class PlaneSeeder extends Seeder {
    public function run(): void {
        Plane::create(['model' => 'Boeing 737', 'code' => 'B737', 'capacity' => 160]);
        Plane::create(['model' => 'Airbus A320', 'code' => 'A320', 'capacity' => 180]);
    }
}
