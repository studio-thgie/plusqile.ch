<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <main class="grid grid-cols-2 gap-4 px-4 macy">
        <?php foreach($page->images() as $image): ?>
            <img class="rounded-full" src="<?= $image->url() ?>" loading="lazy">
        <?php endforeach ?>
    </main>

<?php snippet('footer'); ?>