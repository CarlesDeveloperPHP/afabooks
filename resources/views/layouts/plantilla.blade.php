<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body class="pt-16 pb-16"> 
    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')
</body>
</html>
