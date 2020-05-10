{{-- VISTA DE LA LISTA DE USUARIOS --}}

@extends('layouts.withMenu')

@section('pageTitle', 'Usuarios')

@section('styles')
    <link rel="stylesheet" href="{{ env('APP_URL') }}css/users.css">
@endsection

@section('sectionContent')

    @include('includes.breadcrumb', [
        'route' => ['Usuarios']
    ])

    <div class="userListContainer">

        <a class="user" href="{{ route('usersCreate') }}">
            {{-- Boton para añadir usuarios --}}
            <div class="userCard addUser">
                <div class="userImage"><i class="fas fa-user-plus"></i></div>
                <h3>Añadir Usuario</h3>
            </div>
        </a>

        @foreach ($arrUsers as $user )
            {{-- Listado de todos los usuarios --}}
            <a class="user" href="{{ route('usersEdit', ['id' => $user->id]) }}">
                <div class="userCard">
                    <div class="userImage"><i class="fas fa-user"></i></div>
                    <h3>{{$user->name}}</h3>
                    <h5>{{$user->email}}</h5>
                </div>
            </a>
        @endforeach
    </div>

@endsection