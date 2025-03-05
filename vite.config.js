import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/home.js',
                'resources/js/news.js',
                'resources/js/about.js',
                'resources/js/join.js',
                'resources/js/proker.js',
                'resources/js/team.js',
                'resources/css/home.css',
                'resources/css/news.css',
                'resources/css/proker.css',
                'resources/css/team.css',
                'resources/css/about.css',
                'resources/css/join.css',
                'resources/css/navbar.css',
                'resources/sass/news.scss',
            ],
            refresh: true,
        }),
    ],
    base: './', // Pastikan base sudah dikonfigurasi
    build: {
        outDir: 'public/build', // Pastikan output disimpan di public
    },
    optimizeDeps: {
        include: ['jquery'],
    },
});
