<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <main class="grid grid-cols-2 gap-4 px-4 macy">
        <?php foreach($page->images() as $image): ?>
            <img class="w-full rounded-full" src="<?= $image->thumb(['width' => 960, 'format' => 'webp', 'class' => 'rounded-full'])->url() ?>" loading="lazy">
        <?php endforeach ?>
    </main>

<?php snippet('footer'); ?>