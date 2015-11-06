var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
        .scripts([
            'libs/sweetalert-dev.js',
            // 'libs/dropzone.js'
        ], './public/js/libs.js')
        .styles([
            'libs/sweetalert.css',
            'libs/dropzone.css'
        ], './public/css/libs.css');
    // mix.copy('bower_components/sweetalert/dist/sweetalert-dev.js', 'resources/assets/js/libs/sweetalert-dev.js');
    // mix.copy('bower_components/sweetalert/dist/sweetalert.css', 'resources/assets/css/libs/sweetalert.css');
    // mix.copy('resources/assets/js/libs/dropzone.js', 'public/js/dropzone.js');

});
