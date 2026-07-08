<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('videos', function (Blueprint $table) {
            // Cambiar la columna 'regiones_geograficas' de string a enum
            $table->enum('regiones_geograficas', [
                'Sin especificar',
                'Andina',
                'Caribe',
                'Pacífica',
                'Orinoquía',
                'Amazónica',
                'Insular'
            ])->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('videos', function (Blueprint $table) {
            // Revertir a string (varchar)
            $table->string('regiones_geograficas')->nullable()->change();
        });
    }
};
