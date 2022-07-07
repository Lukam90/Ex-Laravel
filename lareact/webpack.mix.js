const mix = require("laravel-mix");

// React

mix.js('resources/js/app.js', 'public/js')
    .react()
    .extract(["react"])

// Hot Reload

mix.browserSync({
    proxy: "http://127.0.0.1:8000"
});