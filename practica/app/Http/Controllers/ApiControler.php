<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Books;

class ApiControler extends Controller {
    public function index() { // Método para listar todos los libros
        $libros = Books::with('author')->get(); // Obtener todos los libros con sus autores
        return response()->json($libros); // Devolver los libros en formato JSON
    }
    

    public function store(Request $request) {
        try{
            $request->validate([ // Validar los datos
                'title' => 'required|string', // El título es requerido y debe ser una cadena
                'author_id' => 'required|integer', // El ID del autor es requerido y debe ser un entero
                'year' => 'required|integer' // El año es requerido y debe ser un entero
            ]);

            $libro = new Books(); // Crear un nuevo libro
            $libro->title = $request->input('title'); // Asignar el título
            $libro->author_id = $request->input('author_id'); // Asignar el ID del autor
            $libro->published_year = $request->input('published_year'); // Asignar el año de publicación
            $libro->save(); // Guardar el libro en la base de datos
            return response()->json($libro, 201); // Devolver el libro en formato JSON con el código 201 (creado
        }catch(\Exception $e){
            return response()->json(['error' => 'Error'], 500);
        }
    }

    public function destroy($id) {
        $book = Books::find($id); // Buscar el libro por su ID

        if(!$book) { // Si no se encuentra el libro
            return response()->json(['message' => 'Libro no encontrado'], 404); // Devolver un error con el código 404 (no encontrado)
        } else {
            $book->delete();
        }
        return response()->json(['message' => 'Libro eliminado'], 200); // Devolver un mensaje con el código 200 
    }
}