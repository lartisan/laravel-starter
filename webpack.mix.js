const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

mix.js("resources/js/app.js", "public/js")
    // .postCss("resources/css/main.css", "public/css", [require("tailwindcss")])
    .sass("resources/sass/app.scss", "public/css")
    .options({
        processCssUrls: false,
        postCss: [tailwindcss("./tailwind.config.js")]
    })
    .browserSync({
        proxy: "https://lartisan-starter.test"
    });
