<template>
    <div>
        <h2 class="bg-red-800 text-white">Lista de libros</h2> 
        <ul>
            <li v-for="book in books" :key="book.id">
                {{ book.title }}
                <button @click="addFavorito(book.id)" class="px-3">Add Fav</button>
            </li>
        </ul>
    </div>
</template>

<script>
import Cookies from 'js-cookie'; // Importar la librería js-cookie para manejar las cookies en JavaScript
    export default {
        data() {
            return{
                books: [],
            }
        },
        mounted(){
            fetch('api/libros') // Ruta para poner los libros en el array vacio
            .then((response)  => response.json()) // Convertir la respuesta a JSON
            .then((data) => { // Asignar la respuesta a la variable books
                this.books = data; // Asignar la respuesta a la variable books
            })
        }, 
        methods:{ // Método para añadir un libro a favoritos
            addFavorito(id){
                let favorites = Cookies.get('favorites');
                if(!favorites){
                    favorites = '[]';
                }
                // Parseo lista
                favorites = JSON.parse(favorites); // Convertir la lista de favoritos a JSON

                // Añadir libro a favoritos
                if(!favorites.includes(id)){ // Si el libro no está en favoritosS
                    favorites.push(id); // Añadir el libro a favoritos

                    Cookies.set('favorites', JSON.stringify(favorites), {expire:30}) // Convertir la lista de favoritos a JSON

                //Actualiza la variable
                this.favorites = favorites;

                console.log(favorites);
                }
            }
        }
    }
</script>