<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller {
    
    public function register(Request $request) {
        // Validacion de los datos
        $this->validate($request, [
            'name' => 'required|string|max:255', // Nombre del usuario 
            'email' => 'required|string|email|max:255', // Correo electronico del usuario
            'password' => 'required|string|min:8' // Contraseña del usuario
        ]);
        // Crear el nuevo Usuario
        $user = User::create([ // Crear un nuevo usuario
            'name' => $request->name, // Nombre del usuario
            'email' => $request->email, // Correo electronico del usuario
            'password' => Hash::make($request->password) // Contraseña del usuario y poniendo el Hash lo ciframos
        ]);
        // Crear el token de acceso
        $token = $user->createToken('auth_token')->plainTextToken;  // Crear un token de acceso para el usuario
        // Respuesta del servidor
        return response()->json([ 'message' => 'Usuario Registrado', 'token' => $token,], 200); // Respuesta del servidor con un mensaje y el token de acceso
    }

    public function login (Request $request) {
        $credentials = $request->only('email', 'password'); // Credenciales del usuario que se envian por post

        if (Auth::attempt($credentials)) { // Verificar las credenciales del usuario
            $user = Auth::user(); // Buscar al usuario por su correo electronico
            $token = $user->createToken('auth_token')->plainTextToken; // Crear un token de acceso para el usuario
            return response()->json([ 'message' => 'Login OK', 'token' => $token,], 200); // Respuesta del servidor con un mensaje y el token de acceso
        }else {
            return response()->json([ 'message' => 'Login Error'], 401); // Respuesta del servidor con un mensaje de error
        }
    }

    public function user (Request $request) {
        $user = $request->user(); // Buscar al usuario por su token de acceso

        if($user) {
            return response()->json([ 
                'name' => $user->name, // Nombre del usuario
                'email' => $user->email, // Correo electronico del usuario
            ]); // Respuesta del servidor con los datos del usuario
        }else {
            return response()->json([ 'message' => 'Usuario no encontrado'], 404); // Respuesta del servidor con un mensaje de error
        }
    }

    public function logout (Request $request) {
        Auth::logout(); // Cerrar la sesion del usuario
        return response()->json([ 'message' => 'Logout OK'], 200); // Respuesta del servidor con un mensaje
    }
}
