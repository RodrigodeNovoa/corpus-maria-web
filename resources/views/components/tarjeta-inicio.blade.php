@props([
    'titulo' => 'Título por defecto',
    'contenido' => 'Contenido por defecto',
    'imagen' => null,
    'alt' => 'Imagen',
    'enlace' => null,
    'enlaceTexto' => 'Ver más',
    'clase' => '',
    'anchoImagen' => '100%'
])

<div class="tarjeta-inicio {{ $clase }}" style="
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
    padding: 20px;
    max-width: 800px;
    margin: 0 auto;
">
    @if($titulo)
        <h3 style="
            font-size: 1.8rem;
            color: #2d3748;
            margin-bottom: 15px;
            text-align: center;
        ">{{ $titulo }}</h3>
    @endif

    @if($imagen)
        <div style="text-align: center; margin-bottom: 20px;">
            <img 
                src="{{ asset($imagen) }}"
                alt="{{ $alt }}"
                style="
                    max-width: {{ $anchoImagen }};
                    height: auto;
                    border-radius: 8px;
                    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
                "
                onerror="this.style.display='none'; this.parentElement.innerHTML='<div style=\'padding:40px; background:#edf2f7; border-radius:8px;\'><p style=\'color:#718096;\'>Imagen no disponible</p></div>'"
            >
        </div>
    @endif

    @if($contenido)
        <div style="
            color: #4a5568;
            line-height: 1.8;
            font-size: 1.1rem;
            text-align: center;
            margin-bottom: 20px;
        ">
            {{ $contenido }}
        </div>
    @endif

    @if($enlace)
        <div style="text-align: center;">
            <a href="{{ $enlace }}" style="
                display: inline-block;
                padding: 12px 30px;
                background: #4299e1;
                color: white;
                text-decoration: none;
                border-radius: 8px;
                font-weight: 500;
                transition: background 0.3s;
            " onmouseover="this.style.background='#3182ce'" onmouseout="this.style.background='#4299e1'">
                {{ $enlaceTexto }}
            </a>
        </div>
    @endif
</div>

<style>
    .tarjeta-inicio:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
    }
</style>