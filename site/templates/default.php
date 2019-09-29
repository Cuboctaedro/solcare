<?php snippet('header'); ?>

<article class="container mx-auto px-3 bg-white ">
    <header class="w-full px-3 mb-6">
        <h1 class="font-bold uppercase tracking-wide text-solblue-500 text-xl border-b border-solid border-solblue-300 w-full"><?= $page->title() ?></h1>
    </header>
    <div class="flex flex-row flex-wrap items-stretch">
        <?php foreach($page->body()->toStructure() as $block): ?>
            <section class="w-full lg:w-1/3 px-3 mb-6">
                <div class="mb-6">
                    <?php snippet('images/square', ['pic' => $block->image()->toFile()]); ?>
                </div>
                <h2 class="font-bold text-lg text-solblue-500 mb-2"><?= $block->title() ?></h2>
                <div class="generated text-sm">
                    <?= $block->text()->kt() ?>
                </div>
            </section>
        <?php endforeach; ?>
    </div>

</article>




<?php snippet('footer'); ?>
