<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <div class="mx-8 my-12">
        <a href="javascript:history.back()" aria-label="Back to previous page">
            <img src="/assets/graphics/back-arrow.svg" alt="Back to previous page">
        </a>
    </div>

    <main class="px-4 mx-auto mb-28 max-w-7xl">
        <div class="flex flex-col content-center items-center mb-14">
            <h1 class="inline-block flex-shrink px-10 mb-12 font-mono font-bold bg-white rounded-full border border-red text-10rem"><?= $page->title() ?></h1>
            <img class="inline-block rounded-full" src="/assets/temp/artist_header.png" alt="Artist Impression">
        </div>
        <div class="text-3xl font-light">
            <?= $page->description() ?>
            <p>
                <a href=" <?= $page->website() ?>" class="text-5xl font-normal text-red hover:underline"> <?= explode('//', $page->website())[1] ?></a>
            </p>
        </div>
    </main>

    <?php

    $events =  $page->events()->toPages();
    foreach($events as $event): ?>
    
    <section class="flex gap-10 px-4 mx-auto max-w-7xl">
        <div class="w-3/5">
            <p class="mb-5 text-5xl">JE09 18.30</p>
            <h2 class="inline-block flex-shrink px-10 mb-12 font-mono bg-white rounded-full border border-red text-10rem"><?= $event->title() ?></h2>
            <div class="mb-8">
                <span class="text-4xl meta">
                    <span class="artists text-red"><?= $page->title() ?></span> 
                    <span class="category"><?= $event->category() ?></span> 
                    <span class="font-light duration"><?= $event->duration() ?></span> / 
                    <span class="font-bold age"><?= $event->age() ?></span> / 
                    <span class="font-light language"><?= $event->language() ?></span>
                </span>
            </div>
            <div class="mb-8">
                <div class="text-4xl font-light">
                    <?= $event->description() ?>
                </div>
            </div>
            <div class="mb-8 text-3xl text-red">
                <span>Autres représentations:</span>
                <table class="w-64">
                    <tr>
                        <td>Ve</td>
                        <td>10</td>
                        <td>20:00</td>
                    </tr>
                    <tr>
                        <td>Sa</td>
                        <td>11</td>
                        <td>20:30</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="w-2/5">
            <img class="rounded-full" src="/assets/temp/artist_impression.png" alt="Artist Impression">
        </div>
    </section>
        
    <?php endforeach ?>

<?php snippet('footer'); ?>