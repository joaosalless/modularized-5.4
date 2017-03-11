const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .copy('node_modules/tinymce/skins/lightgray/*.css', 'public/js/skins/lightgray')
    .copy('node_modules/tinymce/skins/lightgray/img/*', 'public/js/skins/lightgray/img')
    .copy('node_modules/tinymce/skins/lightgray/fonts/*', 'public/js/skins/lightgray/fonts')
    .copy('node_modules/simple-line-icons/fonts/*', 'public/fonts')
    .copy('node_modules/highlightjs/styles/*.css', 'public/css/highlightjs')
    .copy('node_modules/highlightjs/highlight.pack.js', 'public/js')
    .copy('node_modules/bootstrap-toggle/js/bootstrap-toggle.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
;
