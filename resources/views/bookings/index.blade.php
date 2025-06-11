<h1>{{ __('My Bookings') }}</h1>
<ul>
@foreach ($bookings as $booking)
    <li>{{ $booking->flight->flight_number }} - Seat {{ $booking->seat_number }}</li>
@endforeach
</ul>
