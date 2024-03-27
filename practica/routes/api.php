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


Route::get('/libros', [ApiController::class, 'index']); // Listar todos los libros

Route::post('/libros', [ApiController::class, 'store']); // Crear un nuevo libro

Route::delete('/libros/{id}', [ApiController::class, 'destroy']); // Eliminar un libro por su ID (se pone entre llave porque no sabemos el valor que viene)

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user',  [AuthController::class, 'user']); // Mostrar los datos del usuario autenticado
    Route::post('/logout', [AuthController::class, 'logout']); // Cerrar la sesion del usuario
});

Route::post('/login', [AuthController::class, 'login'])->name('login'); // Iniciar sesion de un usuario
Route::get('/login', [AuthController::class, 'login'])->name('login'); // Iniciar sesion de un usuario (GET)
Route::post('/register', [AuthController::class, 'register']); // Registrar un nuevo usuario
