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
        Schema::create('books', function (Blueprint $table) { // Creación de la tabla de libros
            $table->id(); // Identificador único del libro
            $table->timestamps(); // Fecha de creación y modificación del libro
            $table->string('title'); // Título del libro
            $table->integer('published_year'); // Año de publicación del libro
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books'); // Eliminación de la tabla de libros
    }
};
