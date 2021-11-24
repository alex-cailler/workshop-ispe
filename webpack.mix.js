const mix = require('laravel-mix');
require('laravel-mix-purgecss');

mix
    .js('src/js/app.js', 'assets/js')
    .sass('src/scss/app.scss', 'assets/css')
    .extract()
;
