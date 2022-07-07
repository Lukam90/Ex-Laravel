const mix = require('laravel-mix');

// Asset Management

mix.js('resources/js/app.js', 'public/js')
    .extract()
    .vue(3)
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .version();

// Hot Reload

mix.browserSync({
    proxy: "http://127.0.0.1:8000"
});