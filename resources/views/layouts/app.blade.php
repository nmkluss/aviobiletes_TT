<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Aviobiletes') }}</title>
</head>
<body>
    <nav>
        <a href="{{ route('bookings.index') }}">{{ __('Bookings') }}</a>
        <a href="{{ route('flights.index') }}">{{ __('Flights') }}</a>
        <a href="{{ url('/lang/en') }}">EN</a> | <a href="{{ url('/lang/lv') }}">LV</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
