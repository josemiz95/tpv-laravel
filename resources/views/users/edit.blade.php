{{-- VISTA CON FORMULARIO DE AÑADIR USUARIOS --}}

@extends('layouts.withMenu')

@section('pageTitle', 'Editar Usuario')

@section('styles')
    <link rel="stylesheet" href="{{ env('APP_URL') }}css/users.css">
@endsection

@section('sectionContent')

    @include('includes.breadcrumb', [
        'route' => ['Usuarios', 'Editar', $user->name]
    ])

    <form action="" class="formUser" method="POST">
        @csrf

        <div class="formRow">
            <label class="formControl @error('name') error @enderror" for="name" class="formControl">Nombre</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}" class="formControl">
        </div>

        <div class="formRow">
            <label class="formControl @error('mail') error @enderror" for="mail" class="formControl">Correo Electrónico</label>
            <input type="text" id="mail" name="mail" value="{{ $user->email }}" class="formControl">
        </div>
        <div class="formRow">
            <label class="formControl @error('password') error @enderror" for="password" class="formControl">Contraseña</label>
            <input type="text" id="password" name="password" value="" class="formControl">
        </div>
        <div class="formRow">
            <label class="formControl @error('role') error @enderror" for="role" class="formControl">Rol</label>
            <select id="role" name="role" class="formControl">
                <option value="" disabled selected>Selecciona un Rol</option>
                <option value="1" {{ ($user->rol == 1)?'selected':'' }}>Administrador</option>
                <option value="2" {{ ($user->rol == 2)?'selected':'' }}>Empleado</option>
            </select>
        </div>
        <div class="formButtons">
            <a href="{{ route('usersList') }}" class="btnForm secondary">Cancelar</a>
            <input type="submit" class="btnForm" value="Crear Usuario">
        </div>
        
    </form>

@endsection