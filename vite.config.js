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
                'resources/css/home.css',
                'resources/css/news.css',
                'resources/css/proker.css',
                'resources/css/team.css',
                'resources/css/about.css',
            ],
            refresh: true,
        }),
    ],
    optimizeDeps: {
        include: ['jquery'],
      },
});
