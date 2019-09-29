<meta property="og:title" content="<?= $page->title()?>" />
<meta property="og:description" content="<?= $page->forcedDescription()?>" />
<meta property="og:url" content="<?= $page->url()?>" />
<meta property="og:image" content="<? $page->forcedImage()->thumb([
    'width'   => 1200,
    'height'  => 630,
    'crop'    => true
])->url() ?>" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="<? $site->siteauthortwitter() ?>">
<meta name="twitter:creator" content="<? $page->forcedAuthor() ?>">
<meta name="twitter:title" content="<? $page->title() ?>">
<meta name="twitter:description" content="<?= $page->forcedDescription()?>">
<meta name="twitter:image" content="<? $page->forcedImage()->thumb([
    'width'   => 1200,
    'height'  => 630,
    'crop'    => true
])->url() ?>" />
<?php if($page->isHomePage()): ?>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Solcare",
    "legalName" : "SOLCARE GmbH",
    "url": "<?= $site->url() ?>",
    "logo": "<?= asset('assets/images/solcare-logo-large.png')->url() ?>",
    "foundingDate": "2018",
    "founders": [
        {
            "@type": "Person",
            "name": "Salvatore Cammilleri"
        }
    ],
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Darmstädter Str. 37",
        "addressLocality": "Heppenheim",
        "postalCode": "D-64646",
        "addressCountry": "Germany"
    },
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+49 (0) 6252 9655844",
        "faxNumber": "+49 (0) 6252 9655846",
        "email": "info@solcare.energy"
    },
    "sameAs": [
        <?php if($site->sitetwitter()->isNotEmpty()): ?>
        "<?= $site->sitetwitter() ?>",
        <?php endif; ?>
        <?php if($site->siteinstagram()->isNotEmpty()): ?>
        "<?= $site->siteinstagram() ?>",
        <?php endif; ?>
        <?php if($site->sitelinkedin()->isNotEmpty()): ?>
        "<?= $site->sitelinkedin() ?>",
        <?php endif; ?>
        "https://www.facebook.com/solcaregmbh/"
    ]
}
</script>
<?php else: ?>
<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "name": "<? $page->title() ?>",
    "description": "<?= $page->forcedDescription()?>",
    "publisher": {
        "name": "<? $site->title() ?>"
    },
    "image": "<? $page->forcedImage()->thumb(['width'=> 1200,'height'=> 630,'crop'=> true])->url() ?>"
}
</script>
<?php endif; ?>
