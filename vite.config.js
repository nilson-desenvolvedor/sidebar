import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/theme-dark.css', 'resources/css/theme-light.css', 'resources/css/theme-neutral.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
