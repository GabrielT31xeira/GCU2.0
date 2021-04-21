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

//  CSS
mix.styles([
    'resources/views/css/welcome/reset.css',
    'resources/views/css/welcome/index.css'
], 'public/css/welcome/index.css');

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