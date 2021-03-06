const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.react('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/links/links.scss', 'public/css')
    .browserSync({
        files: [
            'app/**/*',
            'public/**/*',
            'resources/views/links/links.blade.php',
            'resources/lang/**/*',
            'routes/**/*'
        ],
        proxy: {
            target: 'http://localhost/'
        },
        host: 'localhost',
        open: false,
        notify: false
    })