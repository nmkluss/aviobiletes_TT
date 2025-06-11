@extends('layouts.app')
@section('content')
<h1>{{ __('Create Flight') }}</h1>
<form method="POST" action="{{ route('flights.store') }}">
    @csrf
    <input type="text" name="flight_number" placeholder="{{ __('Flight Number') }}">
    <input type="text" name="origin" placeholder="{{ __('Origin') }}">
    <input type="text" name="destination" placeholder="{{ __('Destination') }}">
    <input type="datetime-local" name="departure_time">
    <select name="plane_id">
        @foreach ($planes as $plane)
            <option value="{{ $plane->id }}">{{ $plane->model }}</option>
        @endforeach
    </select>
    <button type="submit">{{ __('Save') }}</button>
</form>
@endsection
