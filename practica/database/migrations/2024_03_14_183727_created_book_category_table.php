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
        Schema::create('book_category', function (Blueprint $table) { // Creación de la tabla de relación entre libros y categorías
            $table->id(); // Identificador único de la relación
            $table->timestamps(); // Fecha de creación y modificación de la relación
            $table->unsignedBigInteger('book_id'); // Identificador del libro a asociar a la categoría
            $table->unsignedBigInteger('category_id'); // Identificador de la categoría a asociar al libro
            $table->foreign('book_id')->references('id')->on('books'); // Clave foránea del libro asociado 1:N con la tabla de libros
            $table->foreign('category_id')->references('id')->on('categories'); // Clave foránea de la categoría asociada 1:N con la tabla de categorías
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
