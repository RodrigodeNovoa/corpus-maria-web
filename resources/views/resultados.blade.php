@extends('layouts.app')

@section('titulo', 'Resultados de busqueda')

@push('styles')
<style>
    .resultado-item {
        background: white;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        transition: transform 0.2s;
    }
    .resultado-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    .resultado-item h3 {
        color: #2d3748;
        margin-bottom: 8px;
    }
    .resultado-item p {
        color: #4a5568;
        margin-bottom: 12px;
    }
    .resultado-item a {
        color: #4299e1;
        text-decoration: none;
        font-weight: 500;
    }
    .resultado-item a:hover {
        text-decoration: underline;
    }
    .sin-resultados {
        text-align: center;
        padding: 40px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .sin-resultados p {
        color: #4a5568;
        font-size: 1.1rem;
    }
</style>
@endpush

@section('contenido')
<div style="max-width: 800px; margin: 0 auto;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h2 style="color: #2d3748;">
            Resultados para: "{{ $query }}"
        </h2>
        <a href="{{ route('buscar') }}?sexo={{ request('sexo') }}&region={{ request('region') }}&mano={{ request('mano') }}&query={{ request('query') }}"
            style="color: #4299e1; text-decoration: none; font-weight: 500;">
             ← Volver a buscar
        </a>
    </div>
    
    @if($videos->count() > 0)
        @foreach($videos as $video)
            <div class="resultado-item">
                <h3>{{ $video->titulo }}</h3>
                <p>{{ $video->descripcion ?? 'Sin descripción disponible' }}</p>
                
                @if(str_contains($video->url_video, 'youtube.com') || str_contains($video->url_video, 'youtu.be'))
                    <a href="{{ $video->url_video }}" target="_blank">▶ Ver en YouTube</a>
                @else
                    <a href="{{ asset($video->url_video) }}" target="_blank">▶ Ver Video</a>
                @endif
            </div>
        @endforeach
        
        {{-- Contador de resultados --}}
        <p style="text-align: center; color: #718096; margin-top: 20px;">
            Mostrando {{ $videos->count() }} resultado(s)
        </p>
    @else
        <div class="sin-resultados">
            <p style="font-size: 1.5rem; margin-bottom: 10px;">😕 No se encontraron resultados</p>
            <p>No hay videos que coincidan con "{{ $query }}"</p>
            <a href="/buscar" style="display: inline-block; margin-top: 20px; color: #4299e1; text-decoration: none;">
                Realizar una nueva búsqueda
            </a>
        </div>
    @endif
</div>
@endsection