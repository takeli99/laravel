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
        Schema::create('categories', function (Blueprint $table) { // Creación de la tabla de categorías
            $table->id(); // Identificador único de la categoría
            $table->timestamps(); // Fecha de creación y modificación de la categoría
            $table->string('name'); // Nombre de la categoría
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('categories'); // Eliminación de la tabla de categorías
    }
};
