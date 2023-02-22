<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <div class="mx-8 my-12">
        <a href="javascript:history.back()" aria-label="Back to previous page">
            <img src="/assets/graphics/back-arrow.svg" alt="Back to previous page">
        </a>
    </div>

    <main class="px-4 mx-auto max-w-5xl">
        <h1 class="inline-block px-10 mb-12 font-mono text-8xl font-bold bg-white rounded-full border border-red"><?= $page->title() ?></h1>
        <ul class="flex flex-col gap-12">
            <?php foreach($page->children() as $edition): ?>
                <li class="flex gap-12 items-start">
                    <span class="px-4 py-2 text-5xl text-white rounded-full bg-red"><?= $edition->title() ?></span>
                    <a href="<?= $edition->program()->toFile() ?>" class="px-5 font-mono text-7xl font-bold bg-white rounded-full border border-red hover:bg-red hover:text-white">Programme</a>
                    <a href="<?= $edition->gallery()->toPage()->url() ?>" class="px-5 font-mono text-7xl font-bold bg-white rounded-full border border-red hover:bg-red hover:text-white">Galerie</a>
                </li>
            <?php endforeach ?>
        </ul>
    </main>

<?php snippet('footer'); ?>