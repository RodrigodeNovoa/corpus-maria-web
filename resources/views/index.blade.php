@extends('layouts.app')

@section('titulo', 'Inicio - Buscador de Signos')

@section('contenido')
<div style="max-width: 600px; margin: 0 auto; text-align: center;">
    <h2 style="font-size: 2rem; margin-bottom: 20px; color: #2d3748;">
        Busca contenido sobre Lengua de Signos
    </h2>
    <p style="color: #4a5568; margin-bottom: 30px;">
        Encuentra videos, imágenes e información en español
    </p>
    
    <form action="/buscar" method="GET" style="display: flex; gap: 10px; justify-content: center;">
        <input 
            type="text" 
            name="query" 
            placeholder="Ejemplo: 'alfabeto', 'saludos'..." 
            required
            style="flex: 1; padding: 12px 20px; border: 2px solid #e2e8f0; border-radius: 8px; font-size: 1rem;"
        >
        <button 
            type="submit" 
            style="padding: 12px 30px; background: #4299e1; color: white; border: none; border-radius: 8px; font-size: 1rem; cursor: pointer; transition: background 0.3s;"
            onmouseover="this.style.background='#3182ce'"
            onmouseout="this.style.background='#4299e1'"
        >
            Buscar
        </button>
    </form>
</div>
@endsection