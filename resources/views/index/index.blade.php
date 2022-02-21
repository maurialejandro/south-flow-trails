<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>South Flow Trails</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('storage/logo/sft1.jpg')}}"  sizes="any">
    <!-- Fonts -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url("");
            background-size: cover;
        
        }
    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
