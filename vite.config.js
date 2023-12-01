import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/frontend/app.scss',
                'resources/css/app.css',
                'resources/css/login.js',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
