<picture>
    <!--[if IE 9]><video style="display: none;><![endif]-->
    <source
        data-srcset="<?= $pic->thumb([
            'width'  => 432,
            'height' => 432,
            'crop'   => true
        ])->url() ?>"
        media="(max-width: 599px)" />
    <source
        data-srcset="<?= $pic->thumb([
            'width'  => 552,
            'height' => 552,
            'crop'   => true
        ])->url() ?>"
        media="(max-width: 887px)" />
    <!-- <source
        data-srcset="<?= $pic->thumb([
            'width'  => 264,
            'height' => 264,
            'crop'   => true
        ])->url() ?>"
        media="(max-width: 1175px)" /> -->
    <source
        data-srcset="<?= $pic->thumb([
            'width'  => 360,
            'height' => 360,
            'crop'   => true
        ])->url() ?>"
        media="(min-width: 1176px)" />
    <!--[if IE 9]></video><![endif]-->
    <img
        data-src="<?= $pic->thumb([
            'width'  => 552,
            'height' => 552,
            'crop'   => true
        ])->url() ?>"
        class="lazyload block"
        alt="<?= $pic->alt() ?>" />
</picture>
