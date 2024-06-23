<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ezoom</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="icon" type="image/x-icon" href="https://ezoom.com.br/application/modules/comum/assets/img/icon/apple-touch-icon-72x72-precomposed.png">
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        
    </head>
    <body>
        <x-header-component></x-header-component>
        @include("components.whatsapp-button-component")
        @include('components.main-content-component', [
            'categoriesWithNews' => $categoriesWithNews,
            'headlines' => $headlines,
        ])
    </body>
</html>
