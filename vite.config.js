import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    // https://dev.to/adamgaskins/laravel-vite-upgrading-dependencies-leads-to-cors-error-id2
    server: {
        cors: {
            origin: /^https?:\/\/(?:(?:[^:]+\.)?localhost|chislehurst-driving-school-2024\.test|127\.0\.0\.1|\[::1\])(?::\d+)?$/,
        },
    },
    plugins: [
        laravel({
            input: ["resources/css/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    resolve: {
        alias: {
            vue: "vue/dist/vue.esm-bundler.js",
        },
    },
    // getting deprecation warnings, should be resolved in bulma v 1.0.5
    css: {
        preprocessorOptions: {
            scss: {
                silenceDeprecations: ["if-function", "legacy-js-api"],
            },
        },
    },
});
