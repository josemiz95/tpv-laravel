<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/general.css">

    @yield('styles')

    <title>@yield('pageTitle')</title> {{-- Titulo de la pagina --}}
</head>
<body>

    <header class="header">
        <a id="toggleMenu"><i class="fas fa-bars"></i></a> <h3>Zetages</h3>
        <div class="userMenu">
            <a id="userMenu">Nombre de usuario <i class="fas fa-sort-down"></i></a>
            <ul class="menu hide">
                <li><a href=""><i class="fas fa-user"></i>Perfil</a></li>
                <li><a href=""><i class="fas fa-power-off"></i>Cerrar sesion</a></li>
            </ul>
        </div>
    </header>
    <div class="appContent">
    
        <div class="appMenu smallMenu">
            <nav>
                <ul>
                    <li class="selected"><a href=""><i class="fas fa-meteor"></i><span>Seleccionado</span></a></li>
                    <li class=""><a href=""><i class="fas fa-meteor"></i><span>Sin seleccionar</span></a></li>
                </ul>
            </nav>
        </div>
    
        <div class="content">
            
            @yield('pageContent') {{-- Contenido de la pagina --}}

        </div>
    
    </div>

   

</body>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="js/app.js"></script>

@yield('scripts')    
    
</html>