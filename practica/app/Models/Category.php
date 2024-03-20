<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function books() { // Relación muchos a muchos con la tabla de libros
        return $this->belongsToMany(Book::class);
    }
}
