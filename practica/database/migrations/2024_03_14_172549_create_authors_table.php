<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('authors', function (Blueprint $table) { // Creación de la tabla authors para los autores
            $table->id(); // Identificador único del autor
            $table->timestamps(); // Fecha de creación y modificación del autor
            $table->string('name'); // Nombre del autor
            $table->string('country'); // País de origen del autor
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('authors'); 
    }
};
