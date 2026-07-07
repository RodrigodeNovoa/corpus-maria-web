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

            // 1. Anhadir la nueva columna 'regiones_geograficas'
            $table->string('regiones_geograficas')->nullable()->after('anho');
            // 2. Anhadir la nueva columna 'mano'
            $table->enum('mano', ['izquierda', 'derecha', 'ambas'])->nullable()->after('sexo'); // Campo añadido
            // 3. Modificar columnas existentes para que sean nullable
            $table->text('descripcion')->nullable()->change();
            $table->string('genero')->nullable()->change();
            $table->string('tema')->nullable()->change();
            $table->string('signante')->nullable()->change();
            $table->string('rango_edad')->nullable()->change();
            $table->enum('sexo', ['masculino', 'femenino'])->nullable()->change();
            $table->integer('duracion')->nullable()->change();
            // NOTA: 'titulo', 'url_video' y 'anho' se mantienen como NOT NULL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('videos', function (Blueprint $table) {
            // 1. Eliminar las columnas anhadidas
            $table->dropColumn(['regiones_geograficas', 'mano']); 
            // 2. Revertir las columnas a NOT NULL
            $table->text('descripcion')->nullable(false)->change();
            $table->string('genero')->nullable(false)->change();
            $table->string('tema')->nullable(false)->change();
            $table->string('signante')->nullable(false)->change();
            $table->string('rango_edad')->nullable(false)->change();
            $table->enum('sexo', ['masculino', 'femenino'])->nullable(false)->change();
            $table->integer('duracion')->nullable(false)->change();
        });
    }
};
