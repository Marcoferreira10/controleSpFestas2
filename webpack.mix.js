
const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/css/reset.css',
    'resources/css/style.css',
], 'public/css/styles.css')

    .scripts([
        'resources/js/script.js',
    ], 'public/js/script.js')

    .version();
