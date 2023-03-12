<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <main class="px-4 mx-auto mb-28 max-w-7xl default">
        <?php snippet('title', ['title' => $page->title()]); ?>
        <?php snippet('cover'); ?>
        <?= $page->text() ?>
    </main>

<?php snippet('footer'); ?>