<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;

    protected $table = 'book_category'; // Nombre de la tabla en la base de datos  que se utiliza para este modelo.
    
    public function books() { // Relación uno a muchos con la tabla de libros
        return $this->belongsTo(Book::class);
    }

    public function category() { // Relación uno a muchos con la tabla de categorías
    return $this->belongsTo(Category::class);
}}
