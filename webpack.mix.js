const mix = require('laravel-mix');
const path = require('path'); // Add this line

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

 mix
 .webpackConfig({
     resolve: {
         alias: {
             '@': path.resolve(__dirname, 'resources/js')
         }
     }
 })
.sass('resources/sass/app.scss', 'public/css');
mix.js('resources/js/app.js', 'public/js').vue();

if (mix.inProduction()) {
    mix.version();
}