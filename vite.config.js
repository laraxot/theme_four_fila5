import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import { google } from 'laravel-vite-plugin/fonts';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            fonts: [
                google('Inter', {
                    weights: [400, 500, 600, 700],
                })
            ],
            //publicDirectory: '../../../public_html',

            //buildDirectory: 'themes/Four',
            refresh: true,
        }),
        //vue(),
        tailwindcss(),

    ],
    build: {
        outDir: '../public/',
        emptyOutDir: true,
      },
});
