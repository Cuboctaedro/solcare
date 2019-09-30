<?php snippet('header'); ?>

<article class="container mx-auto bg-white">

    <header class="hide"><h1><?= $page->title() ?></h1></header>

    <section class="">

        <header class="w-full px-6 mb-6">
            <h2 class="font-bold uppercase tracking-wide text-solblue-500 text-xl border-b border-solid border-solblue-300 w-full">Ansprechpartner</h2>
        </header>

        <div class="flex flex-row flex-wrap items-stretch px-3" >

            <?php foreach($page->people()->toStructure() as $person): ?>

                <section class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
                    <div class="mb-6">
                        <?php if($person->image()->isNotEmpty()):?>
                            <?php snippet('images/square', ['pic' => $person->image()->toFile()]); ?>
                        <?php else: ?>
                            <?php snippet('images/square', ['pic' => asset('assets/images/default-profile.png')]); ?>
                        <?php endif; ?>
                    </div>
                    <h3 class="font-bold text-lg text-solblue-500 mb-2"><?= $person->name() ?></h3>
                    <h4 class="font-normal mb-6"><?= $person->position() ?></h4>
                    <div class="text-sm mb-2">
                        <span class="block text-solblue-500">Mobil:</span>
                        <span class="block"><?= $person->phone() ?></span>
                    </div>
                    <div class="text-sm mb-2">
                        <span class="block text-solblue-500">Email:</span>
                        <span class="block"><?= $person->email() ?></span>
                    </div>
                </section>

            <?php endforeach; ?>

            <section class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
                <div class="mb-6">
                    <a href="https://www.google.com/maps/place/Darmst%C3%A4dter+Str.+37,+64646+Heppenheim+(Bergstra%C3%9Fe),+Germany/@49.6463005,8.6378123,17z/data=!3m1!4b1!4m5!3m4!1s0x4797d9d0680a5841:0x3f0beb51a238989c!8m2!3d49.6463005!4d8.640001" target="_blank" title="Google Map">
                        <?php snippet('images/square', ['pic' => $page->officeimage()->toFile()]); ?>
                    </a>
                </div>
                <h3 class="font-bold text-lg text-solblue-500 mb-2">SOLCARE GmbH</h3>
                <div class="font-normal mb-6">
                    <?= $page->address()->kt() ?>
                </div>
                <div class="text-sm mb-2">
                    <span class="block text-solblue-500">Tel:</span>
                    <span class="block"><?= $page->phone() ?></span>
                </div>
                <div class="text-sm mb-2">
                    <span class="block text-solblue-500">Fax:</span>
                    <span class="block"><?= $page->fax() ?></span>
                </div>
                <div class="text-sm mb-2">
                    <span class="block text-solblue-500">Email:</span>
                    <span class="block"><?= $page->email() ?></span>
                </div>
            </section>

        </div>

    </section>

    <section class="">

        <header class="w-full px-6 mb-6" id="kontaktform">
            <h2 class="font-bold uppercase tracking-wide text-solblue-500 text-xl border-b border-solid border-solblue-300 w-full">Kontaktformular</h2>
        </header>

        <?php if($form->success()): ?>
        <div class="px-3 pb-6" style="background-image: linear-gradient(to bottom, rgba(255,225,191,0), rgba(255,225,191,1));">
            <div class="px-3">
                Thank you for your message.
            </div>
        </div>
        <?php else: ?>
        <form action="<?= $page->url() ?>#kontaktform" method="POST" style="background-image: linear-gradient(to bottom, rgba(255,225,191,0), rgba(255,225,191,1));" class="px-3">
            <div class="flex flex-row flex-wrap">
                <div class="w-full lg:w-1/2">
                    <div class="w-full mb-4 px-3">
                        <?php snippet('forms/input', [
                            'field_name' => 'name',
                            'field_type' => 'text',
                            'form_name' => $form,
                            'field_label' => 'Name',
                        ]);?>
                    </div>
                    <div class="w-full mb-4 px-3">
                        <?php snippet('forms/input', [
                            'field_name' => 'firma',
                            'field_type' => 'text',
                            'form_name' => $form,
                            'field_label' => 'ggf. Firma',
                        ]);?>
                    </div>
                    <div class="w-full mb-4 px-3">
                        <?php snippet('forms/input', [
                            'field_name' => 'email',
                            'field_type' => 'email',
                            'form_name' => $form,
                            'field_label' => 'Email',
                        ]);?>
                    </div>
                    <div class="w-full mb-4 px-3">
                        <?php snippet('forms/input', [
                            'field_name' => 'phone',
                            'field_type' => 'text',
                            'form_name' => $form,
                            'field_label' => 'Tel-Nr.',
                        ]);?>
                    </div>
                    <div class="w-full mb-4 px-3">
                        <?php snippet('forms/input', [
                            'field_name' => 'mobile',
                            'field_type' => 'text',
                            'form_name' => $form,
                            'field_label' => 'Mobil',
                        ]);?>
                    </div>
                    <div class="w-full mb-4 px-3">
                        <?php snippet('forms/input', [
                            'field_name' => 'dachgroesse',
                            'field_type' => 'text',
                            'form_name' => $form,
                            'field_label' => 'Dachgröße',
                        ]);?>
                    </div>
                    <div class="w-full mb-4 px-3">
                        <?php snippet('forms/input', [
                            'field_name' => 'asbest',
                            'field_type' => 'text',
                            'form_name' => $form,
                            'field_label' => 'Asbest',
                        ]);?>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="mb-4 px-3">
                        <?php snippet('forms/textarea', [
                            'field_name' => 'message',
                            'form_name' => $form,
                            'field_label' => 'Ihr Anliegen',
                            'field_options' => ' rows="11" '
                        ]);?>
                    </div>
                    <?php echo csrf_field(); ?>
                    <?php echo honeypot_field(); ?>

                    <div class="mb-6 px-3 flex flex-row justify-end">
                        <input
                            type="submit"
                            value="Senden"
                            class=" inline-block cursor-pointer px-4 py-1 uppercase tracking-wider text-sm bg-solcyan text-white hover:bg-solblue-500 shadow-md hover:shadow-xl"
                        >
                    </div>
                </div>
            </div>
        </form>
<?php endif; ?>
    </section>
</article>


<?php snippet('footer'); ?>
