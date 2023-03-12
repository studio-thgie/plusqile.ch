<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <main class="px-4 mx-auto max-w-7xl">
        <?php snippet('title', ['title' => $page->title()]); ?>
        <ul class="flex relative z-10 flex-col flex-wrap md:flex-row">
            <?php foreach($pages->children() as $child): ?>
                <li class="block mb-4 md:mr-16 md:mb-12 md:inline-block"><a href="<?= $child->url() ?>" class="px-4 font-mono text-xl bg-white rounded-full border transition-colors md:px-6 md:text-7xl border-red hover:bg-red hover:text-white"><?= $child->title() ?></a></li>
            <?php endforeach ?>
        </ul>
        <div class="relative z-0">
        </div>
    </main>

<?php snippet('footer'); ?>