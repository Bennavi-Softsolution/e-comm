<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Link your compiled CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Load Bootstrap using Vite or as needed -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <!-- Content of your body -->
    @yield('home')

    <script>
        // Detect system prefers-color-scheme
        const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: light)");
        const theme = localStorage.getItem('theme') || (prefersDarkScheme.matches ? 'dark' : 'light');

        document.documentElement.setAttribute('data-bs-theme', theme);

        // Update theme based on system preference changes
        prefersDarkScheme.addListener((e) => {
            const newTheme = e.matches ? 'dark' : 'light';
            document.documentElement.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('theme', newTheme);
        });
    </script>
</body>

</html>
