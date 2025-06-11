<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model {
    protected $fillable = ['flight_number','origin','destination','departure_time','plane_id'];
    public function plane() { return $this->belongsTo(Plane::class); }
    public function bookings() { return $this->hasMany(Booking::class); }
    public function users() { return $this->belongsToMany(User::class, 'bookings'); }
}
