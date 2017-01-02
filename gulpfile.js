process.env.DISABLE_NOTIFIER = true;
const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

// elixir(function(mix) {
//     mix.copy('node_modules/uikit/dist/fonts/', 'public/fonts/');
//     mix.copy([
//     	'node_modules/uikit/dist/js/',
//     	'!node_modules//**/*.min.js',
//     	'!node_modules/uikit/dist/js/core{,/**}',
//     	], 'resources/assets/js/uikit/');
// });

elixir((mix) => {
	mix.less('app.less')
        .scriptsIn('resources/assets/js/uikit/','public/js/all.js')
	    .webpack('app.js');

    mix.browserSync({
        proxy: 'sacc.dev',
        notify: false
    });
});