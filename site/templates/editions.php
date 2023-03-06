<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <main class="px-4 mx-auto max-w-7xl">
        <?php snippet('title-default', ['title' => $page->title()]); ?>
        <ul class="flex flex-col gap-12">
            <?php foreach($page->children() as $edition): ?>
                <li class="flex gap-12 items-start max-w-full text-xl md:text-7xl">
                    <span class="px-4 py-2 text-white rounded-full bg-red"><?= $edition->title() ?></span>
                    <a href="<?= $edition->program()->toFile() ?>" class="px-4 py-2 font-mono font-bold bg-white rounded-full border border-red hover:bg-red hover:text-white">Programme</a>
                    <a href="<?= $edition->gallery()->toPage()->url() ?>" class="px-4 py-2 font-mono font-bold bg-white rounded-full border border-red hover:bg-red hover:text-white">Galerie</a>
                </li>
            <?php endforeach ?>
        </ul>
    </main>

<?php snippet('footer'); ?>