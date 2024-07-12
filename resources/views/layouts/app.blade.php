<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- bootstrap linked below here. Add custom components in app.scss -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>


    @yield('home')
    @yield('payment')


</body>

</html>
