<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\BookingController;

Route::get('/', fn() => view('welcome'));

Auth::routes();

Route::get('/lang/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::middleware('auth')->group(function() {
    Route::resource('bookings', BookingController::class)->only(['index','create','store']);
    Route::middleware('can:admin')->resource('flights', FlightController::class);
});
