<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <main class="px-4 mx-auto mb-28 max-w-7xl">
        <?php snippet('title-default', ['title' => $page->title()]); ?>
        <?php snippet('cover'); ?>
        <?= $page->text() ?>
    </main>

<?php snippet('footer'); ?>