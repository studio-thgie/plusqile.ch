<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <main class="px-4 mx-auto max-w-7xl">
        <?php snippet('title', [
            'title' => $page->title(),
            'illustration' => '/assets/illustrations/6_EDITIONS/EDITIONS_Element 1.svg'
        ]); ?>
        <div class="flex flex-row">
            <ul class="flex flex-col gap-6 md:gap-12">
                <?php foreach($page->children() as $edition): ?>
                    <li class="flex gap-4 items-start max-w-full text-xl md:gap-12 md:text-5xl">
                        <span class="px-4 py-2 text-white rounded-full bg-red"><?= $edition->title() ?></span>
                        <a href="<?= $edition->program()->toFile() ?>" class="px-4 py-2 font-mono font-bold bg-white rounded-full border border-red hover:bg-red hover:text-white">Programme</a>
                        <a href="<?= $edition->gallery()->toPage()->url() ?>" class="px-4 py-2 font-mono font-bold bg-white rounded-full border border-red hover:bg-red hover:text-white">Galerie</a>
                    </li>
                <?php endforeach ?>
            </ul>
            <div class="flex-grow" style="min-width: 180px">
                <img src="/assets/illustrations/6_EDITIONS/EDITIONS_Element 2.svg" alt="">
            </div>
        </div>
    </main>

    <style>

        .title-illustration {
            position: absolute;
            width: 500px;
            left: 50%;
            top: -130px;
            z-index: 10;
            transform: translateX(-50%);
        }

    </style>

<?php snippet('footer'); ?>