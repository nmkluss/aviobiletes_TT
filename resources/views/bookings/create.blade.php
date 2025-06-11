<h1>{{ __('Book a Flight') }}</h1>
<form method="POST" action="{{ route('bookings.store') }}">
    @csrf
    <select name="flight_id">
        @foreach ($flights as $flight)
            <option value="{{ $flight->id }}">{{ $flight->flight_number }}</option>
        @endforeach
    </select>
    <input type="text" name="seat_number" placeholder="Seat Number">
    <button type="submit">{{ __('Book') }}</button>
</form>
