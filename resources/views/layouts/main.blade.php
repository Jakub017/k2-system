<!DOCTYPE html>
<html lang="pl">
    <head>
        <!-- Meta tags -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>
            k2system Robert Białogłowicz | Kserokopiarki konica minolta
        </title>

        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet"
        />

        <!-- Swiper.js css -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
        />

        <!-- Vite -->
        @vite(['resources/sass/style.scss', 'resources/js/app.js',
        'resources/css/app.css'])
    </head>
    <body>
        @include('partials.nav') @yield('content') @include('partials.footer')

        <!-- Swiper.js script -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        @yield('scripts')
    </body>
</html>
