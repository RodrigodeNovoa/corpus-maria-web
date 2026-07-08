@extends('layouts.app')

@section('titulo', 'Inicio - Maria Corpus Web')

@push('styles')
<style>
    .contenedor-principal {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px 0;
    }
    
    .seccion-presentacion {
        margin-bottom: 50px;
    }
    
    .seccion-features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        margin-top: 40px;
    }
    
    .feature-item {
        background: white;
        padding: 30px 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        text-align: center;
        transition: transform 0.3s;
    }
    
    .feature-item:hover {
        transform: translateY(-4px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }
    
    .feature-item h4 {
        color: #2d3748;
        margin-bottom: 10px;
        font-size: 1.3rem;
    }
    
    .feature-item p {
        color: #718096;
        font-size: 1rem;
        line-height: 1.5;
    }
    
    .feature-item .icono {
        font-size: 2.5rem;
        margin-bottom: 10px;
        display: block;
    }
</style>
@endpush

@section('contenido')
<div class="contenedor-principal">
    
    {{-- 🔹 Tarjeta de presentación principal --}}
    <div class="seccion-presentacion">
        <x-tarjeta-inicio
            titulo="🌍 Descubre el mundo de la Lengua de Signos"
            contenido="SignosWeb es un buscador especializado que te permite explorar videos, imágenes e información sobre la lengua de signos en español. Aprende, investiga y conecta con la comunidad sorda."
            imagen="assets/img/elden.jpg"
            alt="Lengua de Signos - Imagen representativa"
            enlace="{{ route('buscar') }}"
            enlaceTexto="🔍 Comenzar a buscar"
            anchoImagen="100%"
        />
    </div>
    
    {{-- 🔹 Tarjeta secundaria (ejemplo de uso con otro contenido) --}}
    <div style="margin-bottom: 40px;">
        <x-tarjeta-inicio
            titulo="📚 Recursos educativos"
            contenido="Accede a una amplia colección de materiales didácticos sobre lengua de signos. Perfecto para estudiantes, docentes y cualquier persona interesada en aprender."
            imagen="assets/img/recursos.jpg"
            alt="Recursos educativos"
            enlace="#"
            enlaceTexto="Explorar recursos"
            anchoImagen="80%"
            clase="tarjeta-secundaria"
        />
    </div>
    
    {{-- 🔹 Sección de características (sin componente, porque son elementos más pequeños) --}}
    <div class="seccion-features">
        <div class="feature-item">
            <span class="icono">🎥</span>
            <h4>Videos</h4>
            <p>Encuentra contenido audiovisual sobre lengua de signos</p>
        </div>
        <div class="feature-item">
            <span class="icono">🖼️</span>
            <h4>Imágenes</h4>
            <p>Explora representaciones visuales de señas</p>
        </div>
        <div class="feature-item">
            <span class="icono">📚</span>
            <h4>Información</h4>
            <p>Accede a recursos educativos y documentación</p>
        </div>
    </div>
</div>
@endsection