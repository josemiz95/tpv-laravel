@extends('layouts.withMenu')

@section('pageTitle', 'Usuarios')

@section('styles')
    <link rel="stylesheet" href="css/users.css">
@endsection

@section('sectionContent')

    @include('includes.breadcrumb', [
        'route' => ['Usuarios']
    ])

    <div class="userListContainer">

        <div class="user">
            <div class="userCard addUser">
                <div class="userImage"><i class="fas fa-user-plus"></i></div>
                <h3>Añadir Usuario</h3>
            </div>
        </div>

        @foreach ($arrUsers as $user )
            <div class="user">
                <div class="userCard">
                    <div class="userImage"><i class="fas fa-user"></i></div>
                    <h3>{{$user->name}}</h3>
                    <h5>{{$user->email}}</h5>
                </div>
            </div>
        @endforeach
    </div>

@endsection