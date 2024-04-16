// webpack.mix.js

let mix = require('laravel-mix');

mix
  .options({
    processCssUrls: false,
  })
  .js('src/js/app.js', 'dist/src/js')
  .sass('src/styles/app.scss', 'dist/src/css');
