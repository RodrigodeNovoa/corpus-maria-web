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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');// Titulo del video
            $table->text('descripcion')->nullable();// Descripcion (opcional)
            $table->string('url_video');// Aquí guardaremos la ruta o URL del video
            $table->string('genero'); // Ej: "Comedia", "Drama", "Educativo"
            $table->string('tema'); // Ej: "Tecnologia", "Historia", "Arte"
            $table->string('signante'); // Persona que firma o protagoniza
            $table->string('rango_edad'); // Ej: "0-3", "4-7", "8-12", "13-17", "18+"
            $table->enum('sexo', ['masculino', 'femenino', 'otro', 'no_aplica']); // Para opciones fijas
            $table->integer('duracion'); // Duracion en segundos (recomendado)
            $table->year('anho'); // Solo el anho (ej: 2025)
            $table->timestamps();// Crea campos 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
