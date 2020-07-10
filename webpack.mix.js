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

//mix.setPublicPath('public/');
mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/semantic-ui-css/semantic.min.js',
    //'node_modules/@fortawesome/fontawesome-free/js/all.min.js',
    //'node_modules/popper/dist/umd/popper.min.js',
    //'node_modules/bootstrap/dist/js/bootstrap.min.js',
    //'node_modules/material-design-lite/material.min.js',
], 'public/js/app.js');

mix.sass('resources/sass/app.scss', 'public/css') .options({
    processCssUrls: true
});
//mix.copyDirectory('node_modules/semantic-ui-css/themes/default/assets/fonts', 'public/fonts/themes/default/assets/fonts');



//mix.setResourceRoot('../');