const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .js("resources/js/admin/admin.js", "public/js/admin")
    .js("resources/js/landing/landing.js", "public/js/landing")
    .postCss("resources/css/app.css", "public/css", [require("tailwindcss")])
    .postCss("resources/css/admin/admin.css", "public/css/admin", [require("tailwindcss")])
    .postCss("resources/css/landing/landing.css", "public/css/landing", [require("tailwindcss")]);