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
        whitelist: ['uniform__potty', 'honeypot-field', 'is_active', ],
        whitelistPatterns: [/^pswp/, /^simplebar/]
    })

    .version()

// 'pswp', 'pswp--animate_opacity', 'pswp--open', 'pswp--zoom-allowed', 'pswp__img', 'pswp--zoomed-in', 'pswp--dragging', 'pswp__bg', 'pswp__scroll-wrap', 'pswp__container', 'pswp__zoom-wrap', 'pswp--animated-in', 'pswp__item', 'pswp__img--placeholder', 'pswp__img--placeholder--blank', 'pswp--ie', 'pswp__error-msg', 'pswp__button', 'pswp__ui--over-close', 'pswp__button--close', 'pswp__button--arrow--left', 'pswp__button--arrow--right', 'pswp--svg', 'pswp__button--close', 'pswp__button--share', 'pswp__button--fs', 'pswp--supports-fs', 'pswp--fs', 'pswp__button--zoom', 'pswp--zoom-allowed', 'pswp--zoomed-in', 'pswp--touch', 'pswp__counter', 'pswp__share-modal', 'pswp__share-modal--hidden', 'pswp__share-tooltip', 'pswp__share-modal--fade-in', 'pswp__share--facebook', 'pswp__share--twitter', 'pswp__share--pinterest', 'pswp__share--download', 'pswp__counter', 'pswp__caption', 'pswp__caption__center', 'pswp__caption--empty', 'pswp__caption--fake', 'pswp__preloader', 'pswp__preloader__icn', 'pswp__preloader--active', ''
