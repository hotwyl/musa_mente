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
    .postCss('resources/css/app.css', 'public/assets/css');

// mix.js('resources/js/bootstrap.bundle.min.js', 'public/assets/js/bootstrap.bundle.min.js')
//     .js('resources/js/bootstrap.js', 'public/assets/js/bootstrap.js')
//     .js('resources/js/bootstrap.min.js', 'public/assets/js/bootstrap.min.js')
//     .js('resources/js/dataTables.bootstrap5.min.js', 'public/assets/js/dataTables.bootstrap5.min.js')
//     .js('resources/js/jquery-3.6.0.min.js', 'public/assets/js/jquery-3.6.0.min.js')
//     .js('resources/js/jquery.dataTables.min.js', 'public/assets/js/jquery.dataTables.min.js')
//     .js('resources/js/loader.js', 'public/assets/js/loader.js')
//     .js('resources/js/popper.min.js', 'public/assets/js/popper.min.js')
//     .js('resources/js/sweetalert2@11.js', 'public/assets/js/sweetalert2@11.js')
//     .postCss('resources/css/bootstrap-icons.css', 'public/assets/css/bootstrap-icons.css')
//     .postCss('resources/css/bootstrap.min.css', 'public/assets/css/bootstrap.min.css')
//     .postCss('resources/css/jquery.dataTables.min.css', 'public/assets/css/jquery.dataTables.min.css')
//     .postCss('resources/css/twitter-bootstrap.min.css', 'public/assets/css/twitter-bootstrap.min.css');
