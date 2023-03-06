<section class="<?php if($horizontal): ?>block md:flex gap-10 px-4 mx-auto max-w-7xl<?php endif ?> mb-20">

    <?php if($horizontal): ?>
        <div class="w-full md:w-3/5">
    <?php endif ?>

    <span class="inline-block px-4 py-0 mb-5 border md:px-8 md:py-3 border-red" style="border-radius: 80px">
        <span class="text-base font-bold md:text-5xl time"><?= $event->time()->toDate('H:i') ?></span><br>
        <span class="font-mono text-2xl font-bold md:text-6xl title"><?= $event->title() ?></span>
    </span>
    <div class="px-4 mb-8 md:px-8">
        <a href="<?= $event->artist()->toPage()->url() ?>" class="block text-xl md:text-5xl artists text-red hover:underline"><?= $event->artist()->toPage()->title() ?></a>
        <span class="block text-xl md:text-4xl category"><?= $event->category() ?></span>
        <span class="text-xl md:text-4xl meta">
            <span class="font-light duration"><?= $event->duration() ?></span> / 
            <span class="font-bold age"><?= $event->age() ?></span> / 
            <span class="font-light language"><?= $event->language() ?></span>
        </span>
    </div>
    <div class="px-4 mb-8 text-base font-light md:text-4xl md:px-8">
        <?= $event->description() ?>
    </div>
    <div class="px-4 mb-8 text-sm md:text-3xl md:px-8 text-red">
        <span>Autres représentations:</span>
        <table>
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

    <?php if($horizontal): ?>
        </div>
    <?php endif ?>

    <div class="<?php if($horizontal): ?>w-full md:w-2/5<?php else: ?>px-4 md:px-8<?php endif ?>">
        <img class="rounded-full" src="<?= $event->cover()->toFile()->url() ?>" alt="Programme 1">
    </div>
</section>