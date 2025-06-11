<?php
namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Plane;
use Illuminate\Http\Request;

class FlightController extends Controller {
    public function index() {
        $flights = Flight::with('plane')->get();
        return view('flights.index', compact('flights'));
    }
}
