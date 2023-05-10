<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <main class="px-4 mx-auto mb-28 max-w-7xl">
        <?php snippet('title', ['title' => $page->title()]); ?>
        <?php snippet('cover'); ?>
        <div class="text-base font-light md:text-2xl">
            <?= $page->description() ?>
            <?php if($page->website()->isNotEmpty()): ?>
            <p class="mt-4">
                <a href=" <?= $page->website() ?>" class="text-base font-normal md:text-2xl text-red hover:underline"> <?= explode('//', $page->website())[1] ?></a>
            </p>
            <?php endif ?>
        </div>
    </main>

    <?php
    $events = $page->events()->toPages();
    foreach($events as $event): ?>

        <?php snippet('event', ['event' => $event, 'horizontal' => true]); ?>
        
    <?php endforeach ?>

<?php snippet('footer'); ?>