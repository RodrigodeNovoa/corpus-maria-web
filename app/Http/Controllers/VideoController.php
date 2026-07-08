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

        // Realiza la busqueda en la base de datos
        $videos = Video::where('titulo', 'LIKE', '%' . $query . '%')
                    ->orWhere('descripcion', 'LIKE', '%' . $query . '%')
                    ->get();

        // Retorna la vista de resultados con los videos encontrados
        return view('resultados', compact('videos', 'query'));
    }
}
