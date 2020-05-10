{{-- VISTA PARA AÑADIR BREADCRUMB --}}

@if (isset($route))
    <div class="breadcrumbBar">
        <ul>
            @foreach ($route as $route)
                <li><span>{{ $route }}</span></li>
            @endforeach
        </ul>
    </div>
@endif
