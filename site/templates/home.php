<?php snippet('header'); ?>

    <div class="bg-red">
        <?php snippet('nav'); ?>

        <header>
            <div class="px-4 mx-auto mt-10 mb-24 max-w-7xl logo">
                <img src="/assets/graphics/logo.svg" alt="plusQ'île Logo">
            </div>
        </header>

        <?php if($page->program()->isNotEmpty()): ?>
            <?php $program = $page->program()->toPage() ?>
            <a href="<?= $program->url() ?>" class="fixed -right-14 bottom-28 z-50 py-1 pr-20 pl-5 text-base bg-white rounded-full transition-colors md:py-2 md:pl-10 sm:text-4xl xl:text-6xl hover:text-white hover:bg-red text-red">
                <?= $page->program_label()->title() ?>
            </a>
        <?php endif ?>

        <main class="grid grid-cols-1 gap-4 mx-2 mt-10 md:grid-cols-2">
            <section class="p-4">
                <div class="inline-block font-mono text-6xl font-bold sm:text-7xl xl:text-9xl hover:text-white hover:text-right">
                    <?= $page->info_text() ?>
                </div>
                <!--<ul class="flex gap-7 mb-8 text-xs xl:text-xl">
                    <li><a class="underline" href="#">Programme</a></li>
                    <li><a class="underline" href="#">Billetterie</a></li>
                    <li><a class="underline" href="#">Offree générale</a></li>
                </ul>-->
                <div class="text-2xl font-bold text-white sm:text-4xl xl:text-7xl font-condensed"><?= $page->headline() ?></div>
            </section>
            <?php if($page->gallery()->isNotEmpty()): ?>
                <?php $gallery = $page->gallery()->toPage() ?>
                <section class="p-4">
                    <a href="<?= $gallery->url() ?>">
                        <p class="mb-5 text-2xl font-bold text-center sm:text-4xl xl:text-7xl font-condensed"><?= $gallery->title() ?></p>
                        <?php if($page->gallery_cover()->isNotEmpty()): ?>
                        <img class="w-full rounded-full" src="<?= $page->gallery_cover()->toFile()->url() ?>" alt="Impression 1">
                        <?php endif ?>

                        <!--<ul class="flex gap-7 text-xs xl:text-xl">
                            <li><a class="underline" href="#">Gallery</a></li>
                        </ul>-->
                    </a>
                </section>
            <?php endif ?>
            <?php if($page->association()->isNotEmpty()): ?>
                <?php $association = $page->association()->toPage() ?>
                <section class="flex items-center px-8 py-4 w-full h-full italic font-thin bg-white border border-black border-20 font-condensed hover:text-white hover:bg-transparent hover:border-white">
                    <a href="<?= $association->url() ?>" class="label-assoc">
                       <?= $page->association_label()->title() ?>
                    </a>
                </section>
            <?php endif ?>
            <?php if($page->become_member()->isNotEmpty()): ?>
                <?php $become_member = $page->become_member()->toPage() ?>
                <section class="flex relative items-center px-8 py-4 italic font-light leading-none border-t-4 border-b-4 border-black transition-all sm:text-6xl xl:text-9xl hover:text-white hover:border-white hover:font-bold hover:px-6">
                    <a href="<?= $become_member->url() ?>" class="label-members">
                        <?= $become_member->title() ?>
                    </a>
                    <img src="/assets/illustrations/1_HOME/HOME_IlluElement 5.svg" alt="" class="absolute bottom-0 -right-2 w-60 pointer-events-none">
                </section>
            <?php endif ?>
            <?php if($page->artists()->isNotEmpty()): ?>
                <?php $artists = $page->artists()->toPage() ?>
                <section class="flex items-center">
                    <a href="<?= $artists->url() ?>" class="p-4 italic font-black hover:text-white hover:font-works hover:font-bold label-artists"><?= $page->artists_label()->title() ?></a>
                    <!--<ul class="flex grid-cols-2 gap-7 text-xs md:grid xl:text-xl">
                        <li><a class="underline" href="#">Bios</a></li>
                        <li><a class="underline" href="#">Galerie</a></li>
                        <li><a class="underline" href="#">Liens</a></li>
                        <li><a class="underline" href="#">Instagram</a></li>
                    </ul>-->
                </section>
            <?php endif ?>
            <?php if($page->the_festival()->isNotEmpty()): ?>
                <?php $the_festival = $page->the_festival()->toPage() ?>
                <section class="">
                    <a href="<?= $the_festival->url() ?>" class="flex flex-col font-thin rotate-180 hover:text-white font-condensed label-festival" style="writing-mode: vertical-lr">
                        <span><?= $the_festival->title() ?></span>
                        <span><?= $the_festival->title() ?></span>
                        <span><?= $the_festival->title() ?></span>
                        <span><?= $the_festival->title() ?></span>
                        <span><?= $the_festival->title() ?></span>
                        <span><?= $the_festival->title() ?></span>
                    </a>
                </section>
            <?php endif ?>
            <?php if($page->benevoles()->isNotEmpty()): ?>
                <section class="relative p-4">
                    <div class="static w-full md:absolute">
                        <?= snippet('btn-benevoles', ['url' => $page->benevoles()]); ?>
                    </div>
                </section>
            <?php endif ?>
            <?php if($page->press()->isNotEmpty()): ?>
                <?php $press = $page->press()->toPage() ?>
                <section class="flex relative items-center p-4">
                    <a href="<?= $press->url() ?>" class="inline-block relative font-mono font-bold hover:text-white label-press">
                        <?= $press->title() ?>
                    </a>
                    <img src="/assets/illustrations/1_HOME/HOME_IlluElement 6.svg" alt="" class="absolute right-0 bottom-0 w-36 pointer-events-none">
                </section>
            <?php endif ?>
            <div></div>
            <?php if($page->editions()->isNotEmpty()): ?>
                <?php $editions = $page->editions()->toPage() ?>
                <section class="flex relative items-center p-4 past-editions">
                    <a href="<?= $editions->url() ?>" class="py-8 font-bold text-center px-auto font-works hover:text-white label-editions">
                        <?= $editions->title() ?>
                    </a>
                    <img class="absolute top-0 left-0 w-auto h-full" src="/assets/graphics/curtain_left.svg" alt="Curtain Left">
                    <img class="absolute top-0 right-0 w-auto h-full" src="/assets/graphics/curtain_right.svg" alt="Curtain Right">
                </section>
            <?php endif ?>
        </main>

        <div class="flex overflow-visible relative -bottom-10 justify-center items-end h-40">
            <img src="/assets/illustrations/1_HOME/HOME_IlluElement 7.svg" alt="" class="w-72">
            <img src="/assets/illustrations/1_HOME/HOME_IlluElement 3.svg" alt="" class="w-40">
        </div>
        
        <?php snippet('footer'); ?>

    </div>

    <script src="/assets/node_modules/isotope-layout/dist/isotope.pkgd.min.js" defer></script>
    <script src="/assets/scripts/home.js" defer></script>
