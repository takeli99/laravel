import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';; // Importamos el plugin de Vue.js

export default defineConfig({
    plugins: [
        vue(), // Añadimos el plugin de Vue.js para que Vite lo reconozca
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
