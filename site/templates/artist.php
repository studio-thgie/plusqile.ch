<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <main class="px-4 mx-auto mb-28 max-w-7xl">
        <?php snippet('title-default', ['title' => $page->title()]); ?>
        <div class="flex flex-col content-center items-center mb-14">
            <img class="inline-block rounded-full" src="<?= $page->cover()->toFile()->url() ?>" alt="Artist Impression">
        </div>
        <div class="text-base font-light md:text-3xl">
            <?= $page->description() ?>
            <p>
                <a href=" <?= $page->website() ?>" class="text-5xl font-normal text-red hover:underline"> <?= explode('//', $page->website())[1] ?></a>
            </p>
        </div>
    </main>

    <?php
    $events = $page->events()->toPages();
    foreach($events as $event): ?>

        <?php snippet('event', ['event' => $event, 'horizontal' => true]); ?>
        
    <?php endforeach ?>

<?php snippet('footer'); ?>