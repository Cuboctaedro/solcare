let mix = require("laravel-mix")
let tailwindcss = require('tailwindcss')
let purgeCss = require('laravel-mix-purgecss')

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
    .purgeCss({
        folders: ['site/templates', 'site/snippets'],
        whitelist: ['uniform__potty', 'honeypot-field', 'is_open', 'header-ueber-solcare', 'header-projekte', 'header-betreuung', 'header-ansprechpartner', 'header-impressum'],
        whitelistPatterns: [/^pswp/, /^simplebar/]
    })

    .version()
