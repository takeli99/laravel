<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public function books() { // Relación uno a muchos con la tabla de libros
        return $this->hasMany(Books::class);
    }
}
