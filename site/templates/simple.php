<?php snippet('header'); ?>

<article class="container mx-auto px-3 bg-white">
    <header class="w-full px-3 mb-6">
        <h1 class="font-bold uppercase tracking-wide text-solblue-500 text-xl border-b border-solid border-solblue-300 w-full"><?= $page->title() ?></h1>
    </header>
    <div class="w-full">
        <div class="w-full px-3 mb-6">
            <?= $page->text()->kt() ?>
        </div>
        <div class="w-full px-3 mb-6">
            <img src="<?= $page->pageimage()->toFile()->url() ?>" class="w-auto block" />
        </div>
    </div>
</article>

<?php snippet('footer'); ?>
