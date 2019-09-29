<?php snippet('header'); ?>

<article class="container mx-auto px-3 bg-white">
    <header class="w-full px-3 mb-6">
        <h1 class="font-bold uppercase tracking-wide text-solblue-500 text-xl border-b border-solid border-solblue-300 w-full"><?= $page->title() ?></h1>
    </header>
    <div class="flex flex-row flex-wrap items-stretch">

        <section class="w-full lg:w-1/3 px-3 mb-6 ">
            <div class=" generated">
                <?= $page->data()->kt() ?>
            </div>
        </section>
        <section class="w-full lg:w-2/3 px-3 mb-6">
            <div class="text-sm  generated">
                <?= $page->text()->kt() ?>
            </div>
        </section>

    </div>

</article>




<?php snippet('footer'); ?>
