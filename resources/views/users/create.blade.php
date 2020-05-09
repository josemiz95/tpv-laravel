{{-- VISTA CON FORMULARIO DE AÑADIR USUARIOS --}}

@extends('layouts.withMenu')

@section('pageTitle', 'Nuevo Usuario')

@section('styles')
    <link rel="stylesheet" href="{{ env('APP_URL') }}css/users.css">
@endsection

@section('sectionContent')

    @include('includes.breadcrumb', [
        'route' => ['Usuarios', 'Nuevo']
    ])

    <form action="{{ route('usersStore') }}" class="formUser" method="POST">
        @csrf
        <div class="formRow">
            <label for="name" class="formControl">Nombre</label>
            <input type="text" id="name" name="name" class="formControl">
        </div>
        <div class="formRow">
            <label for="mail" class="formControl">Correo Electrónico</label>
            <input type="text" id="mail" name="mail" class="formControl">
        </div>
        <div class="formRow">
            <label for="password" class="formControl">Contraseña</label>
            <input type="text" id="password" name="password" class="formControl">
        </div>
        <div class="formRow">
            <label for="role" class="formControl">Rol</label>
            <select id="role" name="role" class="formControl">
                <option value="1">Administrador</option>
                <option value="2">Empleado</option>
            </select>
        </div>
        <div class="formButtons">
            <a href="{{ route('usersList') }}" class="btnForm secondary">Cancelar</a>
            <input type="submit" class="btnForm" value="Crear Usuario">
        </div>
        
    </form>

@endsection