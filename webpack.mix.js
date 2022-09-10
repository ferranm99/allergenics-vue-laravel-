// const mix = require('laravel-mix');
//
// /*
//  |--------------------------------------------------------------------------
//  | Mix Asset Management
//  |--------------------------------------------------------------------------
//  |
//  | Mix provides a clean, fluent API for defining some Webpack build steps
//  | for your Laravel applications. By default, we are compiling the CSS
//  | file for the application as well as bundling up all the JS files.
//  |
//  */
//
// mix.js('resources/js/main.js', 'public/js').vue()
//     .sass('resources/sass/app.scss', 'public/css').options({
//     processCssUrls: true
// });
//
// // mix.js('resources/js/main.js', 'public/js').vue()
// //     .sass('resources/sass/app.scss', 'public/css').options({
// //     processCssUrls: true
// // })
//
//

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


class Example {
    webpackRules() {
        return [
            {
                test: /\.(png|jpe?g|gif)(\?.*)?$/,
                loader: 'url-loader',
                options: {
                    limit: 10000
                }
            },
            {
                test: /\.(mp4|webm|ogg|mp3|wav|flac|aac)(\?.*)?$/,
                loader: 'url-loader',
                options: {
                    limit: 10000,
                }
            },
            {
                test: /\.(woff2?|eot|ttf|otf)(\?.*)?$/,
                loader: 'url-loader',
                options: {
                    limit: 10000
                }
            },
            {
                test: /\.(svg)(\?.*)?$/,
                exclude: [
                    /inline\.(.*)\.svg/
                ],
                use: [{
                    loader: 'file-loader',
                    options: {
                        name: 'images/[name].[hash:8].[ext]'
                    }
                }]
            },
            {
                test: /inline\.(.*)\.svg/,
                use: [{
                    loader: 'vue-svg-loader'
                }]
            },
            {
                test: /\.(png|svg|jpg|gif|pdf)$/,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            name: '[name].[ext]'
                        }
                    }
                ]
            }
        ]
    };
}

mix.extend('foo', new Example());

mix.js('resources/js/main.js', 'public/js').vue()
    .sass('resources/sass/app.scss', 'public/css')
    // .foo()
    .options({
        processCssUrls: true
    })
    .version();



