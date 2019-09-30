<?php snippet('header'); ?>

<article class="container mx-auto px-3 bg-white ">
    <header class="hidden"><h1><?= $page->title() ?></h1></header>

    <div class="flex flex-row flex-wrap items-stretch">
        <?php foreach($page->body()->toStructure() as $block): ?>
            <section class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
                <div class="mb-6 p-12">
                    <?php if($block->icon()->isNotEmpty()) {
                        snippet('images/square', ['pic' => $block->icon()->toFile()]);
                    } ?>
                </div>
                <h2 class="font-bold text-lg text-solblue-500 mb-3 pb-1 border-b border-solid border-solblue-500"><?= $block->title() ?></h2>
                <?php if($block->text()->isNotEmpty()): ?>
                <div class="generated text-sm">
                    <?= $block->text()->kt() ?>
                </div>
                <?php endif; ?>
                <?php if($block->image()->isNotEmpty()) {
                    snippet('images/sm', ['pic' => $block->image()->toFile()]);
                } ?>

            </section>
        <?php endforeach; ?>
    </div>

</article>




<?php snippet('footer'); ?>
