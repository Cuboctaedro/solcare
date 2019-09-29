<?php snippet('header'); ?>

<article class="container mx-auto px-3 bg-white pb-6">
    <header class="w-full px-3 mb-6">
        <h1 class="font-bold uppercase tracking-wide text-solblue-500 text-xl border-b border-solid border-solblue-300 w-full"><?= $page->title() ?></h1>
    </header>
    <div class="">
        <?php foreach($page->children()->listed() as $project): ?>
            <article class="w-full flex flex-row flex-wrap">
                <section class="w-full lg:w-1/2 px-3 mb-6">
                    <h2 class="font-bold text-solblue-500 text-lg mb-3"><?= $project->title() ?></h2>
                    <div class="border-b border-solid border-solblue-300 bg-solblue-100 flex flex-row flex-wrap leading-relaxed text-sm">
                        <span class="w-full md:w-1/3 font-bold px-2 ">Projektart</span>
                        <span class="w-full md:w-2/3 px-2"><?= $project->projektart() ?></span>
                    </div>
                    <div class="border-b border-solid border-solblue-300 bg-white flex flex-row flex-wrap leading-relaxed text-sm">
                        <span class="w-full md:w-1/3 font-bold px-2">Dachflächengröße</span>
                        <span class="w-full md:w-2/3 px-2"><?= $project->dachgrosse() ?></span>
                    </div>
                    <div class="border-b border-solid border-solblue-300 bg-solblue-100 flex flex-row flex-wrap leading-relaxed text-sm">
                        <span class="w-full md:w-1/3 font-bold px-2">Leistung</span>
                        <span class="w-full md:w-2/3 px-2"><?= $project->leistung() ?></span>
                    </div>
                    <div class="border-b border-solid border-solblue-300 flex flex-row flex-wrap">
                        <span class="w-full md:w-1/3 font-bold px-2">Modulhersteller</span>
                        <span class="w-full md:w-2/3 px-2"><?= $project->modulhersteller() ?></span>
                    </div>
                    <div class="border-b border-solid border-solblue-300 bg-solblue-100 flex flex-row flex-wrap leading-relaxed text-sm">
                        <span class="w-full md:w-1/3 font-bold px-2">Wechselrichter</span>
                        <span class="w-full md:w-2/3 px-2"><?= $project->wechselrichter() ?></span>
                    </div>
                    <div class="border-b border-solid border-solblue-300 flex flex-row flex-wrap leading-relaxed text-sm">
                        <span class="w-full md:w-1/3 font-bold px-2">Besonderes</span>
                        <span class="w-full md:w-2/3 px-2"><?= $project->besonderes() ?></span>
                    </div>
                </section>
                <section class="w-full lg:w-1/2 mb-6 overflow-x-auto" data-simplebar>
                    <div class="flex flex-no-wrap swipe_gallery" itemscope itemtype="http://schema.org/ImageGallery">
                        <?php foreach($project->gallery()->toFiles() as $picture):?>
                            <?php if($picture->width() > $picture->height()): ?>
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="px-3 flex-none">
                                        <a href="<?= $picture->url(); ?>" itemprop="contentUrl" data-size="<?= $picture->width()?>x<?= $picture->height()?>">
                                            <img src="<?= $picture->thumb(['width'=> 264, 'height'=> 180, 'crop'=> true ])->url(); ?>" itemprop="thumbnail" alt="<?= $picture->alt() ?>" class="block w-full"/>
                                        </a>
                                    </figure>
                            <?php else: ?>
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" class="px-3 flex-none">
                                        <a href="<?= $picture->url(); ?>" itemprop="contentUrl" data-size="<?= $picture->width()?>x<?= $picture->height()?>">
                                            <img src="<?= $picture->thumb(['width'=> 120, 'height'=> 180, 'crop'=> true ])->url(); ?>" itemprop="thumbnail" alt="<?= $picture->alt() ?>" class="block w-full"/>
                                        </a>
                                    </figure>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </section>
            </article>
            <div class="w-full px-3 mb-6">
                <hr class="w-full border-t border-solid border-solblue-200 h-0" />
            </div>
        <?php endforeach; ?>
    </div>

</article>




<?php snippet('footer'); ?>
