import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/assets/plugins/fontawesome-free/css/all.min.css',
             'public/assets/dist/css/adminlte.min.css',
             'public/assets/plugins/jquery/jquery.min.js',
             'public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js',
             'public/assets/dist/js/adminlte.min.js',
             'public/assets/dist/js/demo.js'
            ],
            refresh: true,
        }),
    ],
});
