<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <main class="px-4 mx-auto mb-28 max-w-7xl">
        <?php snippet('title-default', ['title' => $page->title()]); ?>
        <div class="text-base font-light md:text-3xl">
            <?= $page->text() ?>
        </div>
    </main>

<?php snippet('footer'); ?>