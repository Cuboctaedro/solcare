let mix = require("laravel-mix")
let tailwindcss = require('tailwindcss')

mix.setPublicPath("assets")
mix.browserSync("solcare.test")

mix
    .sourceMaps()
    .copyDirectory("src/images", "assets/images")
    .js("src/main.js", "assets")
    .postCss('src/main.css', 'assets', [
        require('postcss-import'),
        require('tailwindcss'),
        require('postcss-nested'),
        require('postcss-css-variables')
    ])

    .version()
