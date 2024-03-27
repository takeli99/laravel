<template> 
    <ul>
        <li>
            <router-link to="/books">Lista libro</router-link> <!-- Enlace a la ruta /books -->
        </li>
        <li>
            <router-link to="/registro">Registro</router-link> <!-- Enlace a la ruta /registro -->
        </li>
        <li>
            <router-link to="/login">Login</router-link> <!-- Enlace a la ruta /login -->
        </li>
    </ul>
    <div>
        <p>¡Hola Mundo!</p>
    </div>
    <router-view></router-view>
</template>