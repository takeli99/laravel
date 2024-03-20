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
        Schema::create('loabs', function (Blueprint $table) { // Creación de la tabla de préstamos
            $table->id(); // Identificador único del préstamo
            $table->timestamps(); // Fecha de creación y modificación del préstamo
            $table->date('loan_date'); // Fecha de préstamo
            $table->date('return_date'); // Fecha de devolución
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('loabs'); // Eliminación de la tabla de préstamos
    }
};
