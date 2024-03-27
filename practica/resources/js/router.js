import {createRouter, createWebHistory } from 'vue-router'; // Importamos createRouter y createWebHistory de vue-router
import BookList from './components/BookList.vue'; // Importamos el componente BookList de nuestro archivo components/BookList.js

// Importamos nuestro nuevos componentes para poder usarlos en las rutas (Profile, login, registro)
// import Profile from './components/Profile.vue';
// import Login from './components/Login.vue ';
// import Register from './components/Register.vue

const routes = [ // Definimos las rutas de nuestro sitio web

    {
        path : '/books', // Definimos la ruta /books
        component : BookList, // Asociamos la ruta /books con el componente BookList
    }

    // Definimos las rutas para los nuevos componentes
    // {
    //     path : '/profile', // Definimos la ruta /profile
    //     name : 'Profile', // Definimos el nombre de la ruta
    //     component : Profile, // Asociamos la ruta /profile con el componente Profile
    //     meta : { requireAuth: true} // Definimos un objeto meta que este autentificado para poder cargar la pagina
    // },
    // {
    //     path : '/login', // Definimos la ruta /login
    //     name: "Login", // Nombre de la ruta
    //     component : Login, // Asociamos la ruta /login con el componente Login
    // },
    // {
    //     path : '/registro', // Definimos la ruta /registro
    //     name: "Registro", // Nombre de la ruta
    //     component : Registro, // Asociamos la ruta /registro con el componente Registro
    // }
]

const router = createRouter({ // Creamos el router
    history : createWebHistory(), // Usamos createWebHistory para gestionar el historial de navegación
    routes, // Asignamos las rutas a nuestro router
}) 

export default router 