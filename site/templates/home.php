<?php snippet('header'); ?>

    <div class="bg-red">
        <?php snippet('nav'); ?>

        <header>
            <div class="px-4 mx-auto mt-10 mb-24 max-w-7xl logo">
                <img src="/assets/graphics/logo.svg" alt="plusQ'île Logo">
            </div>
        </header>

        <main class="grid grid-cols-2 gap-4 mx-8 macy">
            <section>
                <div class="block font-mono text-8xl font-bold 2xl:text-9xl hover:text-white hover:text-right"><?= $page->info_text() ?></div>
                <ul class="flex gap-7 mb-8 text-xl">
                    <li><a class="underline" href="#">Programme</a></li>
                    <li><a class="underline" href="#">Billetterie</a></li>
                    <li><a class="underline" href="#">Offree générale</a></li>
                </ul>
                <div class="text-7xl font-bold text-white 2xl:text-8xl font-condensed"><?= $page->headline() ?></div>
            </section>
            <?php if($page->gallery()->isNotEmpty()): ?>
                <?php $gallery = $page->gallery()->toPage() ?>
                <section>
                    <a href="<?= $gallery->url() ?>">
                        <p class="mb-5 text-7xl font-bold text-center 2xl:text-8xl font-condensed"><?= $gallery->title() ?></p>
                        <img class="w-full rounded-full" src="/assets/temp/impression_1.png" alt="Impression 1">

                        <ul class="flex gap-7 text-xl">
                            <li><a class="underline" href="#">Gallery</a></li>
                        </ul>
                    </a>
                </section>
            <?php endif ?>
            <?php if($page->association()->isNotEmpty()): ?>
                <?php $association = $page->association()->toPage() ?>
                <section>
                    <a href="<?= $association->url() ?>">
                        <p class="px-8 py-4 italic font-thin bg-white border border-black border-20 text-13rem 2xl:text-17rem font-condensed hover:text-white hover:bg-transparent hover:border-white"><?= $page->association_label()->title() ?></p>
                    </a>
                </section>
            <?php endif ?>
            <?php if($page->become_member()->isNotEmpty()): ?>
                <?php $become_member = $page->become_member()->toPage() ?>
                <section>
                    <a href="<?= $become_member->url() ?>">
                        <p class="px-8 py-4 italic font-light border-t-4 border-b-4 border-black transition-all text-10rem 2xl:text-12rem hover:text-white hover:border-white hover:font-bold hover:px-0"><?= $become_member->title() ?></p>
                    </a>
                </section>
            <?php endif ?>
            <?php if($page->artists()->isNotEmpty()): ?>
                <?php $artists = $page->artists()->toPage() ?>
                <section>
                    <a href="<?= $artists->url() ?>" class="italic font-black text-10rem 2xl:text-13rem hover:text-white hover:font-works hover:font-bold"><?= $page->artists_label()->title() ?></a>
                    <ul class="grid grid-cols-2 gap-7 text-xl">
                        <li><a class="underline" href="#">Bios</a></li>
                        <li><a class="underline" href="#">Galerie</a></li>
                        <li><a class="underline" href="#">Liens</a></li>
                        <li><a class="underline" href="#">Instagram</a></li>
                    </ul>
                </section>
            <?php endif ?>
            <?php if($page->the_festival()->isNotEmpty()): ?>
                <?php $the_festival = $page->the_festival()->toPage() ?>
                <section>
                    <a href="<?= $the_festival->url() ?>" class="flex flex-col text-7xl font-thin rotate-180 hover:text-white 2xl:text-8xl font-condensed" style="writing-mode: vertical-lr">
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
                <section class="relative">
                    <a class="italic btn-benevoles font-condensed" href="<?= $page->benevoles() ?>" target="_blank">
                        <img class="w-full" src="/assets/graphics/button.svg" alt="Bénévoles Button Background">
                        <span class="absolute top-24 left-24 text-white" style="font-size: 15vw; line-height: 1;">Béné-<br>Voles</span>
                    </a>
                </section>
            <?php endif ?>
            <?php if($page->press()->isNotEmpty()): ?>
                <?php $press = $page->press()->toPage() ?>
                <section>
                    <a href="<?= $press->url() ?>">
                        <p class="font-mono font-bold text-10rem 2xl:text-12rem hover:text-white"><?= $press->title() ?></p>
                    </a>
                </section>
            <?php endif ?>
            <?php if($page->editions()->isNotEmpty()): ?>
                <?php $editions = $page->editions()->toPage() ?>
                <section>
                    <a href="<?= $editions->url() ?>">
                        <p class="px-8 py-4 text-8xl font-bold 2xl:text-9xl font-works hover:text-white"><?= $editions->title() ?></p>
                    </a>
                </section>
            <?php endif ?>
        </main>
        
        <?php snippet('footer'); ?>

    </div>

    <script src="/assets/node_modules/macy/dist/macy.js" defer></script>
    <script src="/assets/scripts/home.js" defer></script>
