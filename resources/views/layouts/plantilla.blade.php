<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
    <title>@yield('title')</title>
</head>

<body>
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>

</html>
