import { defineConfig } from 'vite';
import sass from 'vite-plugin-sass';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [sass(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js','resources/sass/app.scss'],
            refresh: true,
        }),
    ],
    css:{
        preprocessorOptions: {
            sass: {
                implementation: sass,
            }
        }
    }
});
