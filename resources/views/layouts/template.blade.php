<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupon</title>
    <link rel="stylesheet" href="{{ asset('css/normalizar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/comun.css') }}">
    @yield('css')
</head>
<body id="">
    <div id="contenedor">
        @yield('container')
        <footer>
            &copy; {{ date('Y') }} - Cupon
            <a href="{{ route('page', 'ayuda') }}">Ayuda</a>
            <a href="{{ route('page', 'contacto') }}">Contacto</a>
        </footer>
    </div>
</body>
</html>