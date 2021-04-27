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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
//  CSS
mix.styles([
    'resources/views/css/login/reset.css',
    'resources/views/css/messages/error.css',
    'resources/views/css/login/index.css'
], 'public/css/login/index.css');

mix.styles([
    'resources/views/css/register/reset.css',
    'resources/views/css/messages/error.css',
    'resources/views/css/register/index.css'
], 'public/css/register/index.css');

mix.styles([
    'resources/views/css/admDashboard/reset.css',
    'resources/views/css/admDashboard/index.css',
    'resources/views/css/admDashboard/forms/user.css'
], 'public/css/admDashboard/index.css');
