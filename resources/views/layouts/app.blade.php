<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Buscador de Lengua de Signos')</title>
    
    {{-- Estilos globales --}}
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: system-ui, -apple-system, sans-serif; 
            background: #f5f7fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            flex: 1;
        }
        .main-content {
            padding: 40px 0;
        }
    </style>
    
    {{-- Estilos adicionales por página --}}
    @stack('styles')
</head>
<body>
    {{-- Header --}}
    @include('layouts._partials.header')
    
    {{-- Contenido principal --}}
    <main class="container main-content">
        @yield('contenido')
    </main>
    
    {{-- Footer --}}
    @include('layouts._partials.footer')
    
    {{-- Scripts globales --}}
    <script>
        // JavaScript global si lo necesitas
    </script>
    
    {{-- Scripts adicionales por página --}}
    @stack('scripts')
</body>
</html>