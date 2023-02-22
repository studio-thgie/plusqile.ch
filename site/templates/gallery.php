<?php snippet('header'); ?>

    <?php snippet('nav'); ?>
        
    <div class="mx-8 my-12">
        <a href="javascript:history.back()" aria-label="Back to previous page">
            <img src="/assets/graphics/back-arrow.svg" alt="Back to previous page">
        </a>
    </div>

    <main class="grid grid-cols-2 gap-4 px-4 macy">
        <?php foreach($page->images() as $image): ?>
            <img class="rounded-full" src="<?= $image->url() ?>" loading="lazy">
        <?php endforeach ?>
    </main>

<?php snippet('footer'); ?>