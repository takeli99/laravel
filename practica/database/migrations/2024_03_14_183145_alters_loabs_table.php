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
        Schema::table('loabs', function (Blueprint $table) { // Creación de la tabla de préstamos
            $table->unsignedBigInteger('books_id') ->nullable(); // Identificador del libro prestado
            $table->foreign('books_id')->references('id')->on('books')->onDelete('set null'); // Clave foránea del libro prestado 1:N con la tabla de libros
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
