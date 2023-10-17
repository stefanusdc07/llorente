<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Taylor Llorente' }}</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" integrity="sha256-imWjOiEEAcjWdL1+inhBu1dWYFyXuiO9vpJVEQd3y/c=" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/fonts.css') }}" media="screen" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('styles/main.min.css') }}" media="screen" crossorigin="anonymous">
    
    <!-- Splide's Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
    
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js" crossorigin="anonymous"></script>
    
    <livewire:styles />
    <livewire:scripts />
    
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div id="app">
         @include('layouts.navbar')
        <main class="py-4">
            @yield('content')
        </main>
        {{ $slot }}
    </div>
     @include('layouts.footer')
</body>
</html>
