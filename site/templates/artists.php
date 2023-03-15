<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <main class="px-4 mx-auto max-w-7xl">
        <?php snippet('title', [
            'title' => $page->title(),
            'illustration' => '/assets/illustrations/3_ARTISTE/ARTISTE_Element 1.svg'
        ]); ?>
        <ul class="flex relative z-10 flex-col flex-wrap md:flex-row">
            <?php foreach($page->children() as $child): ?>
                <li class="block mb-4 md:mr-16 md:mb-12 md:inline-block"><a href="<?= $child->url() ?>" class="px-4 font-mono text-xl bg-white rounded-full border transition-colors md:px-6 md:text-7xl border-red hover:bg-red hover:text-white"><?= $child->title() ?></a></li>
            <?php endforeach ?>
        </ul>
        <div class="relative z-0">
            <img src="/assets/illustrations/3_ARTISTE/ARTISTE_Element 2.svg" alt="">
        </div>
    </main>

    <style>

        .title-illustration {
            position: absolute;
            width: 240px;
            left: 120px;
            top: -70px;
            z-index: 10;
        }

    </style>

<?php snippet('footer'); ?>