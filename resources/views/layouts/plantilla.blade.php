<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<style>
    .active {
        color: red;
        font-weight: bold;
    }

</style>


<body>
    @include('layouts.partials.header')
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>

</html>
