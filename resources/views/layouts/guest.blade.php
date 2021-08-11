<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Rebel inc') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- Particle -->
        <script src="{{ URL::asset('js/particles.js') }}" ></script>
        <script src="{{ URL::asset('js/particles.min.js') }}" ></script>
        <!-- Stats JS  -->
        <script src="{{ URL::asset('js/stats.js') }}" ></script>
        
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased" id='particles-js-home'>
            <div class="count-particles" style='width: 100%; background: transparent;'>
                {{ $slot }} 
            
            </div>
        </div>
    </body>
</html>
