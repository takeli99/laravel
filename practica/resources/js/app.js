import './bootstrap';
import {createApp} from 'vue'; 
import HelloWorld from './components/HelloWorld.vue'; // Importamos el componente HelloWorld de nuestro archivo components/HelloWorld.
import BookList from './components/BookList.vue'; // Importamos el componente BookList de nuestro archivo components/BookList.
import router from "./router"; // Importamos el router

//Creamos aplicacion
createApp(HelloWorld).use(router).mount('#app'); // Montamos el componente HelloWorld en el div con id app.  Usando Vue Router para gestionar las rutas.


