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

mix.js('resources/js/app.js', 'public/assets/js')
    .js('resources/js/function.js', 'public/assets/js')
    .js('resources/js/bootstrap.bundle.min.js', 'public/assets/js')
    .js('resources/js/bootstrap.js', 'public/assets/js')
    // .js('resources/js/bootstrap.min.js', 'public/assets/js')
    .js('resources/js/jquery-3.6.0.min.js', 'public/assets/js')
    .js('resources/js/popper.min.js', 'public/assets/js')
    .js('resources/js/script.js', 'public/assets/js')
    .postCss('resources/css/bootstrap.min.css', 'public/assets/css')
    .postCss('resources/css/style.css', 'public/assets/css')
    .postCss('resources/css/app.css', 'public/assets/css');