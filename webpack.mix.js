const mix = require('laravel-mix');

mix.ja('resources/js/app.js','public/js')
.sass('resouces/sass/app.scss','public/css')
.sass('resources/sass/main.scss','public/css');