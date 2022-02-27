// webpack.mix.js

let mix = require('laravel-mix');

mix.js('./src/Javascript/app.js', 'dist').setPublicPath('dist');

//sass
mix.sass('src/stylesheets/main.scss', 'dist');


//scssでbg-imgが表示されない時
// mix.options({
//   processCssUrls: false,
// })

mix.webpackConfig({
  plugins: [
  ],
  resolve: {
  },
  stats: {
    children: true //エラー時内容を表示
  }
});


// Image optimization (This just copies, doesn't work optimization[deprecated?])
let ImageminPlugin = require( 'imagemin-webpack-plugin' ).default;
mix.webpackConfig( {
    plugins: [
        new ImageminPlugin( {
          disable: process.env.NODE_ENV !== 'production', // Disable during development
            pngquant: {
                quality: '65',
            },
            test: /\.(jpe?g|png|gif|svg|jpg)$/i,
        } ),
    ],
} )
mix.copy( 'src/images', 'dist/images', false );
