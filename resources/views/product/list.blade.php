{{-- VISTA DE LA LISTA DE Productos --}}

@extends('layouts.withMenu')

@section('pageTitle', 'Usuarios')

@section('styles')
    <link rel="stylesheet" href="{{ env('APP_URL') }}css/product.css">
@endsection

@section('sectionContent')

    @include('includes.breadcrumb', [
        'route' => ['Usuarios']
    ])

    <div class="productsContent">
        {{-- Boton de añadir nuevo y barra para filtrar en tabla --}}
        <a href="">Nuevo</a>
        <input type="text" name="" id="">
    </div>

    <table class="tableMaterial">
        <thead>
            <tr>
                <th></th>
                <th>Nombre</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>Imagen</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>Acciones</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection