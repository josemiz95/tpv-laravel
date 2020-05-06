@extends('layouts.main')

@section('pageContent')
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
                    <li class=""><a href="{{ route('usersList') }}"><i class="fas fa-meteor"></i><span>Usuarios</span></a></li>
                </ul>
            </nav>
        </div>
    
        <div class="content">
            
            @yield('sectionContent') {{-- Contenido de la pagina --}}

        </div>
    
    </div>
@endsection
    
