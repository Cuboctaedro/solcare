<picture>
    <!--[if IE 9]><video style="display: none;><![endif]-->
    <source
        data-srcset="<?= $pic->thumb([
            'width'  => 432
        ])->url() ?>"
        media="(max-width: 599px)" />
    <source
        data-srcset="<?= $pic->thumb([
            'width'  => 552
        ])->url() ?>"
        media="(max-width: 887px)" />
    <source
        data-srcset="<?= $pic->thumb([
            'width'  => 264
        ])->url() ?>"
        media="(max-width: 1175px)" />
    <source
        data-srcset="<?= $pic->thumb([
            'width'  => 360
        ])->url() ?>"
        media="(min-width: 1176px)" />
    <!--[if IE 9]></video><![endif]-->
    <img
        data-src="<?= $pic->thumb([
            'width'  => 552
        ])->url() ?>"
        class="lazyload block"
        alt="<?= $pic->alt() ?>" />
</picture>
