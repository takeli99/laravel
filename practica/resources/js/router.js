import {createRouter, createWebHistory } from 'vue-router'; // Importamos createRouter y createWebHistory de vue-router
import BookList from './components/BookList.vue'; // Importamos el componente BookList de nuestro archivo components/BookList.js

const routes = [ // Definimos las rutas de nuestro sitio web

    {
        path : '/books', // Definimos la ruta /books
        component : BookList, // Asociamos la ruta /books con el componente BookList
    }
]

const router = createRouter({ // Creamos el router
    history : createWebHistory(), // Usamos createWebHistory para gestionar el historial de navegación
    routes, // Asignamos las rutas a nuestro router
}) 

export default router 