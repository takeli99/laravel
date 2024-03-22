import './bootstrap';
import {createApp} from 'vue';
import HelloWorld from './components/HelloWorld.vue'; // Importamos el componente HelloWorld de nuestro archivo components/HelloWorld.
import BookList from './components/BookList.vue'; // Importamos el componente BookList de nuestro archivo components/BookList.

//Creamos aplicacion
createApp(BookList).mount('#app'); // Montamos el componente HelloWorld en el div con id app.


