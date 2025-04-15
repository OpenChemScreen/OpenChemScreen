import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',
        port: 5173,
        strictPort: true, // if you want Vite to fail if the port is already in use
        cors: {
            origin: 'http://192.168.128.30', // or the specific origin of your Laravel app
            credentials: true,
        },
        hmr: {
            host: 'localhost',
        },
    },
});
