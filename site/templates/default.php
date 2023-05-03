<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <main class="px-4 mx-auto mb-28 max-w-7xl default">
        <?php snippet('title', ['title' => $page->title()]); ?>
        <?php snippet('cover'); ?>

        <?php if($page->pagenav() == 'true'): ?>
            <!--<ul class="flex flex-wrap gap-3 mb-14 subnav">
                <?php foreach ($page->children() as $key => $subpage): ?>
                    <li>
                        <a class="px-4 text-base list-none bg-white rounded-full border-2 transition-colors pointer-events-auto md:text-xl border-red hover:bg-red hover:text-white" style="text-decoration: none;" href="<?= $subpage->url() ?>"><?= $subpage->title() ?></a>
                    </li>
                <?php endforeach ?>
            </ul>-->
            <ul class="flex flex-wrap gap-3 mb-14 pagenav"></ul>
        <?php endif ?>

        <?php
            $blocks = $page->blocks()->toStructure();
            foreach ($blocks as $block): ?>
            <div class="flex <?= $block->illustration_position() ?> gap-4">
                <div>
                    <?= $block->text() ?>
                </div>
                <?php if($block->illustration()->isNotEmpty()): ?>
                <div class="flex-grow" style="min-width: 180px; max-width: 240px;">
                    <?php foreach ($block->illustration()->toFiles() as $image): ?>
                        <img src="<?= $image->url() ?>">
                    <?php endforeach ?>
                </div>
                <?php endif ?>
            </div>
            <?php if($block->map() == 'true'): ?>
                <iframe class="mx-auto mt-4 mb-8 w-full max-w-5xl rounded-full border-2 border-red" src="https://snazzymaps.com/embed/439750" width="100%" height="600px"></iframe>
            <?php endif ?>
        <?php endforeach ?>

        <?php if($page->downloads()->toFiles()->count()): ?>
            <h2>Downloads</h2>
            <ul class="">
                <?php foreach ($page->downloads()->toFiles() as $key => $download): ?>
                    <li class="mb-2">
                        <a target="_blank" class="px-4 text-base list-none bg-white rounded-full border-2 transition-colors pointer-events-auto md:text-xl border-red hover:bg-red hover:text-white" style="text-decoration: none;" href="<?= $download->url() ?>"><?= ucwords(str_replace(['-', '_'], ' ', $download->name())) ?></a>
                    </li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
    </main>

<?php snippet('footer'); ?>