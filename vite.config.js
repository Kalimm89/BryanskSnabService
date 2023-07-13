import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/assets/admin/plugins/fontawesome-free/css/all.min.css',
             'public/assets/admin/dist/css/adminlte.min.css',
             'public/assets/admin/plugins/jquery/jquery.min.js',
             'public/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
             'public/assets/admin/dist/js/adminlte.min.js',
             'public/assets/admin/dist/js/demo.js',
             'resources/css/main.css',
             'resources/css/bootstrap.min.css',
             'public/assets/ckeditor5/build/ckeditor.js',
            //  Главная
             'resources/css/fonts.css',
             'resources/css/footer.css',
             'resources/css/header.css',
             'resources/js/bootstrap.bundle.min.js',
             'resources/js/main.js',
             'resources/css/uslugi.css',
            ],
            refresh: true,
            
        }),
    ],
    
    
});
