<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

//Route::view('/', 'index')->name('index');
Route::get('/', [VideoController::class, 'index'])->name('index');
Route::get('/buscar', [VideoController::class, 'buscar'])->name('buscar');


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

