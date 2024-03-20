<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $table = "loabs"; // Nombre de la tabla en la base de datos que se utiliza para este modelo.

    public function book() { // Relación uno a muchos con la tabla de libros
        return $this->belongsTo(Books::class);
    }
}
