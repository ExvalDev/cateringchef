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

mix.js('resources/js/app.js', 'public/js')
mix.js('resources/js/search.js', 'public/js')
mix.js('resources/js/supplierCustomer.js', 'public/js')
mix.js('resources/js/toastr.js', 'public/js')
mix.js('resources/js/tables.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/style_auth.scss', 'public/css')
   .sass('resources/sass/style_tables.scss', 'public/css')
   .sass('resources/sass/style_menu.scss', 'public/css')
   .sass('resources/sass/style_checkbox.scss', 'public/css')
mix.copyDirectory('resources/img', 'public/img');
mix.copyDirectory('resources/videos', 'public/videos');
mix.copyDirectory('resources/favicon', 'public/favicon');
mix.copy('resources/js/menu.js', 'public/js');
mix.copy('resources/fonts/kreon.z', 'vendor/tecnickcom/tcpdf/fonts');
/* mix.copy('resources/fonts/Kreon.zip', 'vendor/tecnickcom/tcpdf/fonts');
mix.copy('resources/fonts/Kreon.afm', 'vendor/tecnickcom/tcpdf/fonts'); */
mix.copy('resources/fonts/kreon.php', 'vendor/tecnickcom/tcpdf/fonts');
/* mix.copy('resources/fonts/Kreon-VariableFont_wght.ttf', 'vendor/tecnickcom/tcpdf/fonts'); */
