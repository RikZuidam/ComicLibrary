<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    
    <link rel="stylesheet" href="{{ asset('/assets/css/cart.css') }}">
    <script defer src="{{ asset('/assets/js/cart.js') }}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Document</title>
</head>
<body>
    <nav></nav>
    <main>
        {{ $slot }}
    </main>
    <footer></footer>
</body>
</html>