@extends('layouts.app')
{{-- @extends, indica al index que toma de plantilla al layout(esquema: app.blade) --}}

@section('titulo', 'Buscador de Signos')
{{-- @section, inyecta conteido en el esquema --}}

@section('contenido')

{{-- Contenedor de cuadro de busqueda --}}
<div style="max-width: 800px; margin: 0 auto; text-align: center;padding: 20px 0;">
    <h2 style="font-size: 2rem; margin-bottom: 20px; color: #2d3748;">
        🔍 Busca contenido sobre Lengua de Signos
    </h2>

    <p style="color: #4a5568; margin-bottom: 30px;">
        Encuentra videos, imágenes e información en español
    </p>
    <form action="/resultados" method="GET">

        {{-- Contenedor de filtros (3 desplegables en horizontal) --}}
        <div style="display: flex; gap: 15px; justify-content: center; margin-bottom: 25px; flex-wrap: wrap; background: #f7fafc; padding: 20px; border-radius: 10px; border: 1px solid #e2e8f0;">
            
            {{-- Filtro 1: Sexo --}}
            <div style="flex: 1; min-width: 150px; text-align: left;">
                <label for="filtro-sexo" style="display: block; font-size: 0.9rem; font-weight: 600; color: #4a5568; margin-bottom: 4px;">
                    Sexo
                </label>
                <select
                    id="filtro-sexo"
                    name="sexo"
                    style="width: 100%; padding: 8px 12px; border: 2px solid #e2e8f0; border-radius: 6px; font-size: 1rem; background: white; cursor: pointer;"
                >
                    <option value="">Sin filtro</option>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>
            </div>

            {{-- Filtro 2: Region Geografica --}}
            <div style="flex: 1; min-width: 150px; text-align: left;">
                <label for="filtro-region" style="display: block; font-size: 0.9rem; font-weight: 600; color: #4a5568; margin-bottom: 4px;">
                    Región Geográfica
                </label>
                <select
                    id="filtro-region"
                    name="region"
                    style="width: 100%; padding: 8px 12px; border: 2px solid #e2e8f0; border-radius: 6px; font-size: 1rem; background: white; cursor: pointer;"
                >
                    <option value="">Sin filtro</option>
                    <option value="Sin especificar">Sin especificar</option>
                    <option value="Andina">Andina</option>
                    <option value="Caribe">Caribe</option>
                    <option value="Pacífica">Pacífica</option>
                    <option value="Orinoquía">Orinoquía</option>
                    <option value="Amazónica">Amazónica</option>
                    <option value="Insular">Insular</option>
                </select>
            </div>

            {{-- Filtro 3: Mano --}}
            <div style="flex: 1; min-width: 150px; text-align: left;">
                <label for="filtro-mano" style="display: block; font-size: 0.9rem; font-weight: 600; color: #4a5568; margin-bottom: 4px;">
                    Mano
                </label>
                <select
                    id="filtro-mano"
                    name="mano"
                    style="width: 100%; padding: 8px 12px; border: 2px solid #e2e8f0; border-radius: 6px; font-size: 1rem; background: white; cursor: pointer;"
                >
                    <option value="">Sin filtro</option>
                    <option value="izquierda">Izquierda</option>
                    <option value="derecha">Derecha</option>
                    <option value="ambas">Ambas</option>
                </select>
            </div>
        </div>

        {{-- Formulario de busqueda --}}
        <div style="display: flex; gap: 10px; justify-content: center;">
            <label for="barra-buscadora" style="position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0,0,0,0); border: 0;">
                Buscar por alguna palabra del título
            </label>
            <input
                type="text"
                id="barra-buscadora"
                name="query"
                placeholder="Busca por alguna palabra del título o de la descripción"
                required
                style="flex: 1; padding: 12px 20px; border: 2px solid #e2e8f0; border-radius: 8px; font-size: 1rem;"
                value="{{ request('query') }}"
                style="flex: 1; padding: 12px 20px; border: 2px solid #e2e8f0; border-radius: 8px; font-size: 1rem; transition: border-color 0.3s;"
                onfocus="this.style.borderColor='#4299e1'; this.style.boxShadow='0 0 0 3px rgba(66,153,225,0.3)'"
                onblur="this.style.borderColor='#e2e8f0'; this.style.boxShadow='none'"
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
        </div>
    </form>
</div>
@endsection