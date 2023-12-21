const mix = require('laravel-mix');


mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/responsive.css',
    'resources/css/style.css'
],
'public/css/main.css');



mix.js([
    'resources/js/app.js',
    'resources/js/jquery.sticky-kit.min.js',
    'resources/js/custom.js',
    'resources/js/bootstrap.min.js',
    'resources/js/imagesloaded.pkgd.min.js',
    'resources/js/grid-blog.min.js',



],'public/js/main.js'
);


mix.copyDirectory('resources/css/fonts',  'public/css/fonts');

mix.copyDirectory('resources/img',  'public/img');