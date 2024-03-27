<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear roles
        $adminRole = Role::create(['name' => 'administrador']); // admin es el nombre del rol
        $userRole = Role::create(['name' => 'usuario']); // user es el nombre del rol

        // Crear permisos
        $adminRole->givePermissionTo('borrar libros'); // borrar libros es el nombre del permiso
    }
}
