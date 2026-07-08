@extends('layouts.app')
{{-- @extends, indica al index que toma de plantilla al layout(esquema: app.blade) --}}

@section('titulo', 'Buscador de Signos')
{{-- @section, inyecta conteido en el esquema --}}

@section('contenido')
<div style="max-width: 600px; margin: 0 auto; text-align: center;">
    <h2 style="font-size: 2rem; margin-bottom: 20px; color: #2d3748;">
        🔍 Busca contenido sobre Lengua de Signos
    </h2>
    <p style="color: #4a5568; margin-bottom: 30px;">
        Encuentra videos, imágenes e información en español
    </p>
    
    <form action="/resultados" method="GET" style="display: flex; gap: 10px; justify-content: center;">
        <label for="barra-buscadora" style="position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); border: 0;">
            Buscar por alguna palabra del título
        </label>
        <input
            type="text"
            id="barra-buscadora"
            name="query"
            placeholder="Busca por alguna palabra del título"
            required
            style="flex: 1; padding: 12px 20px; border: 2px solid #e2e8f0; border-radius: 8px; font-size: 1rem;"
        >
        <button 
            type="submit" 
            style="padding: 12px 30px; background: #4299e1; color: white; border: none; border-radius: 8px; font-size: 1rem; cursor: pointer; transition: background 0.3s;"
            onmouseover="this.style.background='#3182ce'"
            onmouseout="this.style.background='#4299e1'"
            onfocus="this.style.outline='3px solid #63b3ed'; this.style.outlineOffset='2px'"
            onblur="this.style.outline='none'"
        >
            Buscar
        </button>
    </form>
</div>
@endsection