@extends('layouts.app')
@section('content')
<h1>{{ __('All Flights') }}</h1>
<table>
@foreach ($flights as $flight)
    <tr>
        <td>{{ $flight->flight_number }}</td>
        <td>{{ $flight->origin }} → {{ $flight->destination }}</td>
        <td>{{ $flight->departure_time }}</td>
    </tr>
@endforeach
</table>
@endsection
