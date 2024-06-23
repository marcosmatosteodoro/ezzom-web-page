<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="https://ezoom.com.br/application/modules/comum/assets/img/icon/apple-touch-icon-72x72-precomposed.png">
        <title>ezoom</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
