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


mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/popper/dist/umd/popper.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    ]
   ,'public/js/app.js');

    mix.sass('resources/sass/app.scss', 'public/css');

    mix.setPublicPath('public');
mix.setResourceRoot('../');

