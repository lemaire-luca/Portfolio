/*----- Webpack compiler ------ */
const mix = require('laravel-mix');

/* SCSS */
mix.sass('wp-content/themes/portfolio/ressources/style.scss',
    'wp-content/themes/portfolio/public/css').options({
    processCssUrls: false,
});