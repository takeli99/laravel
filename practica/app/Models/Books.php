<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model {
    use HasFactory;

    public function author() { // Relación de la tabla books con la tabla authors
        return $this->belongsTo(Author::class);
    }

    public function loans() { // Relación uno a muchos con la tabla de préstamos    
        return $this->hasMany(Loan::class);
    }

    public function categories() { // Relación muchos a muchos con la tabla de categorías
        return $this->belongsToMany(Category::class);
    }

    
}
