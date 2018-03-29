let mix = require('laravel-mix');

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

mix.styles([
    'node_modules/mdbootstrap/css/bootstrap.min.css',
    'node_modules/mdbootstrap/css/mdb.min.css',
    'resources/assets/sass/app.scss'
], 'public/css/app.css');

mix.scripts([
    'node_modules/mdbootstrap/js/jquery-3.2.1.min.js',
    'node_modules/mdbootstrap/js/bootstrap.min.js',
    'node_modules/mdbootstrap/js/mdb.min.js',
    'resources/assets/js/app.js'
], 'public/js/app.js');
