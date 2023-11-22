import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import resolve from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        resolve((name) => {
            const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
            return pages[`./Pages/${name}.vue`]
        }),
    ],
});
