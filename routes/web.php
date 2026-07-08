<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;


Route::get('/', [VideoController::class, 'home'])->name('home'); //Nueva Home

Route::get('/buscar', [VideoController::class, 'index'])->name('buscar'); //Buscador, antiguo index

Route::get('/resultados', [VideoController::class, 'buscar'])->name('resultados'); //Resultados, cambia el nombre de la ruta, pero no el del metodo


//Route::view('/', 'index')->name('index');

/* Route::get('/', function () {
    return view('index');
}); */



//Comprobar conexion con BD
/* use Illuminate\Support\Facades\DB;

Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        $version = DB::select('SELECT VERSION() as version');
        return "✅ Conexión exitosa a MariaDB. Versión: " . $version[0]->version;
    } catch (\Exception $e) {
        return "❌ Error de conexión: " . $e->getMessage();
    }
}); */

