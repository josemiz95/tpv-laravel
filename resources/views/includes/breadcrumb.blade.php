{{-- VISTA PARA AÑADIR BREADCRUMB --}}

@if (isset($route))
    <div class="breadcrumbBar">
        <ul>
            @foreach ($route as $route)
                <li>{{ $route }}</li>
            @endforeach
        </ul>
    </div>
@endif
