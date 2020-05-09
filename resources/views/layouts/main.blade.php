<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}css/general.css">

    @yield('styles')

    <title>@yield('pageTitle')</title> {{-- Titulo de la pagina --}}
</head>
<body>

    @yield('pageContent') {{-- Contenido de la pagina --}}

</body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ env('APP_URL') }}js/app.js"></script>

@yield('scripts')    
    
</html>