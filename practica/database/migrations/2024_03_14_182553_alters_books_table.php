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
        Schema::table('books', function (Blueprint $table) { // Modificación de la tabla de libros
            $table->unsignedBigInteger('author_id') ->nullable(); // Identificador del autor del libro 
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('set null'); // Clave foránea del autor del libro 1:N con la tabla de autores
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
