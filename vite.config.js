import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/principal/app.css',
                'resources/css/admin/app.css',
                'resources/css/client/app.css'
            ],
            refresh: true,
        }),
        vue({
            template:{
                transformAssetUrls:{
                    base:null,
                    includeAbsolute: false,
                }
            }
        })
    ],
});
