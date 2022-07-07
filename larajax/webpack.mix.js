const mix = require('laravel-mix');

// Hot Reload

mix.browserSync({
    proxy: "http://127.0.0.1:8000"
});