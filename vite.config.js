import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/custom-styles.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        // host: '172.16.173.16', // Replace with your actual local IP address
    },
});
