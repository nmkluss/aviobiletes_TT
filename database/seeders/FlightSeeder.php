<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flight;

class FlightSeeder extends Seeder {
    public function run(): void {
        Flight::create([
            'flight_number' => 'BT101',
            'origin' => 'Riga',
            'destination' => 'London',
            'departure_time' => now()->addDays(3),
            'plane_id' => 1
        ]);
    }
}
