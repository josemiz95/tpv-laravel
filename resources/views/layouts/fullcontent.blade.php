<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    @section('styles')
        {{-- Seccion con estilos --}}
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/general.css">
    @show
    <title>@yield('pageTitle')</title> {{-- Titulo de la pagina --}}
</head>
<body>

    @yield('pageContent') {{-- Contenido de la pagina --}}

</body>

@section('scripts')
    {{-- Seccion de Scripts --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    {{-- <script src="<?='vista/js/app.js'?>"></script> --}}
@endsection
</html>