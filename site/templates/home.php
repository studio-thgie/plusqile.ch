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
            <a href="<?= $program->url() ?>" class="fixed -right-14 bottom-28 z-50 py-2 pr-20 pl-10 text-6xl bg-white rounded-full transition-colors hover:text-white hover:bg-red text-red">
                <?= $page->program_label()->title() ?>
            </a>
        <?php endif ?>

        <main class="flex gap-4 mx-2 mt-10 isotope">
            <section class="p-4 w-full md:w-1/2 isotope-item">
                <div class="block font-mono text-8xl font-bold 2xl:text-9xl hover:text-white hover:text-right"><?= $page->info_text() ?></div>
                <ul class="flex gap-7 mb-8 text-xs md:text-xl">
                    <li><a class="underline" href="#">Programme</a></li>
                    <li><a class="underline" href="#">Billetterie</a></li>
                    <li><a class="underline" href="#">Offree générale</a></li>
                </ul>
                <div class="text-4xl font-bold text-white md:text-7xl 2xl:text-8xl font-condensed"><?= $page->headline() ?></div>
            </section>
            <?php if($page->gallery()->isNotEmpty()): ?>
                <?php $gallery = $page->gallery()->toPage() ?>
                <section class="p-4 w-full md:w-1/2 isotope-item">
                    <a href="<?= $gallery->url() ?>">
                        <p class="mb-5 text-4xl font-bold text-center md:text-7xl 2xl:text-8xl font-condensed"><?= $gallery->title() ?></p>
                        <?php if($page->gallery_cover()->isNotEmpty()): ?>
                        <img class="w-full rounded-full" src="<?= $page->gallery_cover()->toFile()->url() ?>" alt="Impression 1">
                        <?php endif ?>

                        <ul class="flex gap-7 text-xs md:text-xl">
                            <li><a class="underline" href="#">Gallery</a></li>
                        </ul>
                    </a>
                </section>
            <?php endif ?>
            <?php if($page->association()->isNotEmpty()): ?>
                <?php $association = $page->association()->toPage() ?>
                <section class="p-4 w-full md:w-1/2 isotope-item">
                    <a href="<?= $association->url() ?>">
                        <p class="px-8 py-4 text-8xl italic font-thin bg-white border border-black border-20 md:text-13rem 2xl:text-17rem font-condensed hover:text-white hover:bg-transparent hover:border-white"><?= $page->association_label()->title() ?></p>
                    </a>
                </section>
            <?php endif ?>
            <?php if($page->become_member()->isNotEmpty()): ?>
                <?php $become_member = $page->become_member()->toPage() ?>
                <section class="p-4 w-full md:w-1/2 isotope-item">
                    <a href="<?= $become_member->url() ?>">
                        <p class="px-8 py-4 text-7xl italic font-light border-t-4 border-b-4 border-black transition-all md:text-10rem 2xl:text-12rem hover:text-white hover:border-white hover:font-bold hover:px-0"><?= $become_member->title() ?></p>

                        <img src="/assets/illustrations/1_HOME/HOME_IlluElement 5.svg" alt="" class="absolute bottom-0 -right-2 w-60 pointer-events-none">
                    </a>
                </section>
            <?php endif ?>
            <?php if($page->artists()->isNotEmpty()): ?>
                <?php $artists = $page->artists()->toPage() ?>
                <section class="p-4 w-full md:w-1/2 isotope-item">
                    <a href="<?= $artists->url() ?>" class="text-7xl italic font-black md:text-10rem 2xl:text-13rem hover:text-white hover:font-works hover:font-bold"><?= $page->artists_label()->title() ?></a>
                    <ul class="flex grid-cols-2 gap-7 text-xs md:grid md:text-xl">
                        <li><a class="underline" href="#">Bios</a></li>
                        <li><a class="underline" href="#">Galerie</a></li>
                        <li><a class="underline" href="#">Liens</a></li>
                        <li><a class="underline" href="#">Instagram</a></li>
                    </ul>
                </section>
            <?php endif ?>
            <?php if($page->the_festival()->isNotEmpty()): ?>
                <?php $the_festival = $page->the_festival()->toPage() ?>
                <section class="p-4 w-full md:w-1/2 isotope-item">
                    <a href="<?= $the_festival->url() ?>" class="flex flex-col text-5xl font-thin rotate-180 md:text-7xl hover:text-white 2xl:text-8xl font-condensed" style="writing-mode: vertical-lr">
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
                <section class="relative p-4 w-full md:w-1/2 isotope-item">
                    <a class="italic btn-benevoles font-condensed" href="<?= $page->benevoles() ?>" target="_blank">
                        <img class="w-full" src="/assets/graphics/button.svg" alt="Bénévoles Button Background">
                        <span class="absolute top-24 left-24 text-white" style="font-size: 15vw; line-height: 1;">Béné-<br>Voles</span>
                    </a>
                </section>
            <?php endif ?>
            <?php if($page->press()->isNotEmpty()): ?>
                <?php $press = $page->press()->toPage() ?>
                <section class="p-4 w-full md:w-1/2 isotope-item">
                    <a href="<?= $press->url() ?>" class="inline-block relative">
                        <p class="font-mono text-8xl font-bold md:text-10rem 2xl:text-12rem hover:text-white"><?= $press->title() ?></p>
                        <img src="/assets/illustrations/1_HOME/HOME_IlluElement 6.svg" alt="" class="absolute bottom-0 -right-20 w-36 pointer-events-none">
                    </a>
                </section>
            <?php endif ?>
            <?php if($page->editions()->isNotEmpty()): ?>
                <?php $editions = $page->editions()->toPage() ?>
                <section class="relative p-4 w-full md:w-1/2 isotope-item past-editions">
                    <a href="<?= $editions->url() ?>">
                        <p class="py-8 text-5xl font-bold text-center px-auto md:text-8xl 2xl:text-9xl font-works hover:text-white"><?= $editions->title() ?></p>
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
