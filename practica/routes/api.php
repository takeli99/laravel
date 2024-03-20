<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController; // Importar el controlador de la API

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/libros', [ApiController::class, 'index']); // Listar todos los libros

Route::post('/libros', [ApiController::class, 'store']); // Crear un nuevo libro

Route::delete('/libros/{id}', [ApiController::class, 'destroy']); // Eliminar un libro por su ID (se pone entre llave porque no sabemos el valor que viene)
