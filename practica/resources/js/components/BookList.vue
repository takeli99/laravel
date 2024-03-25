<template>
    <div>
        <h2 class="bg-red-800 text-white">Lista de libros</h2> 
        <ul>
            <li v-for="book in books" :key="book.id">
                {{ book.title }}
            </li>
        </ul>
    </div>
</template>

<script>
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
        }
    }
</script>