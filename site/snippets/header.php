<!doctype html>
<html lang="de">
<head>
    <title><?= e(!$page->isHomePage(), $page->title(). ' | ' , '') ?><?= $site->title() ?></title>
    <meta name="description" content="<?= e($page->isHomePage(), $site->description() , $page->forcedDescription() ) ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?= $page->url() ?>"/>

    <?php snippet('meta');?>

    <link rel="stylesheet" href="https://use.typekit.net/cpg5lpb.css">

    <?= mix('/main.css') ?>

</head>
<body class="font-sans text-soltext text-base leading-normal bg-white relative min-h-screen">
    <?php snippet('skiplinks');?>

<?php if($page->isHomePage()):?>
    <header class=" w-full relative z-20 shadow-xl" id="header" style="height:600px;">
        <div class="header_background absolute inset-0 bg-cover bg-top z-10 " id="header-home"></div>
        <div class="header_gradient absolute inset-x-0 top-0 h-40 z-20" style="background-image: linear-gradient(to top, rgba(0,0,0,0), rgba(0,0,0,0.5));"></div>
        <div class="site_logo absolute z-30">
            <h1 class="absolute inset-0 bg-contain bg-no-repeat logo" style="background-image:url('<?= asset('assets/images/solcare-logo-large.png')->url() ?>');">
                <span class="hide"><?= $site->title() ?></span>
            </h1>
        </div>
        <a href="<?= $pages->find('ueber-solcare')->url() ?>" class="absolute inset-x-0 z-40 pb-20 bg-bottom bg-no-repeat text-center text-white text-xl md:text-2xl" style="background-image:url('<?= asset('assets/images/arrowdown.png')->url() ?>');bottom:24px;">
            <h2 class="uppercase tracking-wide ">Solcare</h2>
            <h3 class="">Lassen Sie Ihr Dach für Sie arbeiten!</h3>
        </a>
    </header>

    <main id="main" class="relative z-10 pb-24 pt-12" style="background-image: linear-gradient(to bottom, rgb(255,255,255), rgb(255,223,155));">

<?php else: ?>
    <header class=" w-full h-80 relative z-20 mb-6 shadow-lg" id="header" >
        <div class="header_background absolute inset-0 bg-cover bg-top z-10" id="header-<?= $page->slug() ?>"></div>
        <div class="header_gradient absolute inset-x-0 top-0 h-40 z-20" style="background-image: linear-gradient(to top, rgba(0,0,0,0), rgba(0,0,0,0.5));"></div>
        <div class="site_logo absolute z-30">
            <a href="<?= $site->url() ?>" class="absolute inset-0 bg-contain bg-no-repeat logo" style="background-image:url('<?= asset('assets/images/solcare-logo-large.png')->url() ?>');">
                <span class="hide"><?= $site->title() ?></span>
            </a>
        </div>
        <div class="absolute bottom-0 inset-x-0 z-40">
            <?php snippet('menu'); ?>
        </div>
    </header>

    <main id="main" class="relative z-10 pb-24">
<?php endif;?>
