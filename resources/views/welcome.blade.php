<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Red+Hat+Mono:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ config("app.name") }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src={{ asset('images/Logo.png') }} alt="" width="150" height="150">
        </div>
        <div class="nav-items">
            <a href="#">Home</a>
            <a href="#about">About</a>
            <a href="#products">Products</a>
            <a href="#contact-us">Contact Us</a>
        </div>
    </div>

    {{-- Section Accueil --}}
    @include('home')

    {{-- Section A propos --}}
    @include('about')

    {{-- Section Produits --}}
    @include('products')

    {{-- Section contacts --}}
    @include('contact')
</body>
</html>