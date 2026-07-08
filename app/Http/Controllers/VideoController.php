<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

     // Nueva pagina de inicio con imagen y texto
    public function home()
    {
        return view('home');
    }

     // Esta funcion mostrara la pagina de busqueda (antigua pg de inicio)
    public function index()
    {
        return view('buscar'); // Busca resources/views/index.blade.php
    }

    // Esta funcion procesara la busqueda y mostrara los resultados
    public function buscar(Request $request)
    {
        $query = $request->input('query'); // Obtiene el termino de busqueda
        $sexo = $request->input('sexo'); //Filtro sexo
        $region = $request->input('region'); //Filtro region
        $mano = $request->input('mano'); //Filtro mano

        // Construir la consulta base
        $videos = Video::query();
    
         // Filtro por título/descripción
        if ($query) {
            $videos->where(function ($q) use ($query) {
                $q->where('titulo', 'LIKE', '%' . $query . '%')
                  ->orWhere('descripcion', 'LIKE', '%' . $query . '%');
            });
        }
    
        // Filtro por Sexo
        if ($sexo) {
            $videos->where('sexo', $sexo);
        }
        
        // Filtro por Región Geográfica
        if ($region) {
            $videos->where('regiones_geograficas', $region);
        }
        
        // Filtro por Mano
        if ($mano) {
            $videos->where('mano', $mano);
        }
        
        // Obtener resultados
        $videos = $videos->get();


        // Retorna la vista de resultados con los videos encontrados
        return view('resultados', compact('videos', 'query'));
    }
        /**
         * //Busqueda sin filtros en la base de datos
         * $videos = Video::where('titulo', 'LIKE', '%' . $query . '%')
         * ->orWhere('descripcion', 'LIKE', '%' . $query . '%')
         * ->get();
         */
}
