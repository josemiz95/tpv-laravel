{{-- VISTA PRINCIPAL CON MENUS --}}

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
    
        <div class="appMenu smallMenu spanding">
            <nav>
                <ul>
                    <li class="{{(request()->is('/'))? 'selected':''}}"><a href="{{ route('home') }}"><i class="fas fa-home"></i><span>Home</span></a></li>
                    <li class="{{(request()->is('users*'))? 'selected':''}}"><a href="{{ route('usersList') }}"><i class="fas fa-users"></i><span>Usuarios</span></a></li>

                    {{-- Menu apartado de configuracion --}}
                    <li class="{{(request()->is('settings*'))? 'selected':''}} menuSettings"><a href=""><i class="fas fa-cog"></i><span>Configuración</span></a></li>
                </ul>
            </nav>
        </div>
    
        <div class="content">
            
            @yield('sectionContent') {{-- Contenido de la pagina --}}

        </div>
    
    </div>
@endsection
    
