<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller {
    public function __construct() { $this->middleware('auth'); }

    public function index() {
        $user = Auth::user();
        $bookings = $user->bookings()->with('flight')->get();
        return view('bookings.index', compact('bookings'));
    }

    public function create() {
        $flights = Flight::all();
        return view('bookings.create', compact('flights'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'flight_id' => 'required|exists:flights,id',
            'seat_number' => 'required|string',
        ]);

        $validated['user_id'] = Auth::id();
        Booking::create($validated);

        return redirect()->route('bookings.index')->with('success', __('Booking confirmed.'));
    }
}
