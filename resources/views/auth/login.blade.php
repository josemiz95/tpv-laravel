@extends('layouts.main')

@section('pageTitle', 'Iniciar Sesion')

@section('styles')
    @parent
    <link rel="stylesheet" href="css/login.css">
@endsection

@section('pageContent')
    <div class="contentFlex">
        <div class="loginbox">
            <form action="{{ route('authenticate') }}" method="POST">
                @csrf
                <div class="form-line">
                    <label for="usuario">Usuario:</label>
                    <input class="form-input" type="text" name="email" id="email" placeholder="Usuario">
                </div>
                <div class="form-line">
                    <label for="contrasena">Contraseña:</label>
                    <input class="form-input" type="password" name="password" id="password" placeholder="Contraseña">
                </div>
                <div class="formBtn">
                    <input class="submitBtn" type="submit" value="Entrar">
                </div>
            </form>
        </div>
    </div>
@endsection
