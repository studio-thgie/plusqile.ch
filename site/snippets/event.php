<section class="<?php if($horizontal): ?>block md:flex gap-10 px-4 mx-auto max-w-7xl<?php else: ?>isotope-item w-full pr-4 md:w-1/2<?php endif ?> mb-20 all <?php $performances = $event->performances()->toStructure(); foreach ($performances as $performance): ?>d<?= $performance->date() ?> <?php endforeach ?> <?= $event->category() ?> <?= $event->age() ?> <?= $event->language() ?>">

    <?php if($horizontal): ?>
        <div class="w-full md:w-3/5">
    <?php endif ?>

    <span class="inline-block px-4 py-0 mb-5 border-2 md:px-8 md:py-3 border-red" style="border-radius: 80px">
        <?php if($event->performances()->isNotEmpty()): ?>
        <span class="text-base font-bold md:text-4xl time"><?= $event->performances()->toStructure()->first()->time()->toDate('H:i') ?></span><br>
        <?php endif ?>
        <span class="font-mono text-2xl font-bold md:text-6xl title"><?= $event->title() ?></span>
    </span>
    <?php if($event->artist()->isNotEmpty()): ?>
    <div class="px-4 mb-8 md:px-8">
        <a href="<?= $event->artist()->toPage()->url() ?>" class="block text-xl md:text-5xl artists text-red hover:underline"><?= $event->artist()->toPage()->title() ?></a>
        <span class="block text-xl md:text-4xl category"><?= t($event->category()) ?></span>
        <span class="text-xl md:text-4xl meta">
            <span class="font-light duration"><?= $event->duration() ?></span>
            <?php if($event->age()->isNotEmpty()): ?>
            / <span class="font-bold age"><?= t($event->age()) ?></span>
            <?php endif ?>
            <?php if($event->language()->isNotEmpty()): ?>
            / <span class="font-light language"><?= t($event->language()) ?></span>
            <?php endif ?>
            <?php if($event->place()->isNotEmpty()): ?>
            / <span class="font-light place"><?= $event->place() ?></span>
            <?php endif ?>
        </span>
    </div>
    <?php endif ?>
    <div class="px-4 mb-8 text-base font-light md:text-3xl md:px-8">
        <?php if($event->description()->isNotEmpty()): ?>
        <div class="overflow-hidden transition-all duration-300 description">
            <?= $event->description() ?>
        </div>
        <div class="mt-4 text-center">
            <button class="transition-transform duration-300 rotate-0 cursor-pointer show-description">
                <img src="/assets/graphics/arrow-down.svg" alt="Arrow down">
            </button>
        </div>
        <?php endif ?>
    </div>
    <?php if($event->performances()->isNotEmpty()): ?>
    <div class="px-4 mb-8 text-sm md:text-3xl md:px-8 text-red">
        <span><?= t('all_shows') ?>:</span>
        <table>
            <?php
            $performances = $event->performances()->toStructure();
            foreach ($performances as $performance): ?>
            <tr>
                <td class="pr-6"><?= t($performance->date()->toDate('D')) ?></td>
                <td class="pr-6"><?= $performance->date()->toDate('d') ?></td>
                <td><?= $performance->time()->toDate('H:i') ?></td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
    <?php endif ?>

    <?php if($horizontal): ?>
        </div>
    <?php endif ?>

    <div class="<?php if($horizontal): ?>w-full md:w-2/5<?php else: ?>px-4 md:px-8<?php endif ?>">
        <?php if($event->cover()->toFile()): ?>
        <img class="rounded-full" src="<?= $event->cover()->toFile()->thumb(['width' => 960, 'format' => 'webp'])->url() ?>" alt="Programme 1">
        <?php endif ?>
    </div>
</section>