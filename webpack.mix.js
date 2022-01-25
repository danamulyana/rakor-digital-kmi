const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/scss/vertical-layout-light/style.scss','public/css/app.css')
    .combine([
        'resources/vendors/select2/select2.min.css',
        'resources/vendors/select2-bootstrap-theme/select2-bootstrap.min.css',
        'resources/vendors/feather/feather.css',
        'resources/vendors/css/vendor.bundle.base.css',
        'resources/vendors/datatables.net-bs4/dataTables.bootstrap4.css',
        'resources/vendors/ti-icons/css/themify-icons.css',
        'resources/vendors/line-awesome/1.3.0/css/line-awesome.css'
    ], 'public/css/vendor.min.css')
    .combine([
        './node_modules/jquery/dist/jquery.min.js', 
        './node_modules/popper.js/dist/umd/popper.min.js', 
        './node_modules/bootstrap/dist/js/bootstrap.min.js', 
        './node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js',
        'resources/vendors/chart.js/Chart.min.js',
        'resources/vendors/datatables.net/jquery.dataTables.js',
        'resources/vendors/datatables.net-bs4/dataTables.bootstrap4.js',
        'resources/js/dataTables.select.min.js',
        'resources/js/off-canvas.js',
        'resources/js/hoverable-collapse.js',
        'resources/js/template.js',
        'resources/js/settings.js',
        'resources/js/todolist.js',
        'resources/js/Chart.roundedBarCharts.js',
        'resources/vendors/select2/select2.min.js',
        'resources/js/select2.js',
    ], 'public/js/app.js')

mix.copyDirectory('resources/images/faces', 'public/images/faces');
mix.copyDirectory('resources/images/dashboard', 'public/images/dashboard');
mix.copyDirectory('resources/vendors/feather/fonts', 'public/css/fonts');
mix.copyDirectory('resources/vendors/ti-icons/fonts', 'public/fonts');
mix.copyDirectory('resources/vendors/line-awesome/1.3.0/fonts', 'public/fonts');

if (mix.inProduction()) {
    mix.version();
}
