import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/home.js',
                'resources/js/news.js',
            ],
            refresh: true,
        }),
    ],
    optimizeDeps: {
        include: ['jquery'],
      },
});
