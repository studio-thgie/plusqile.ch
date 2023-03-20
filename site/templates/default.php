<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <main class="px-4 mx-auto mb-28 max-w-7xl default">
        <?php snippet('title', ['title' => $page->title()]); ?>
        <?php snippet('cover'); ?>

        <?php
            $blocks = $page->blocks()->toStructure();
            foreach ($blocks as $block): ?>
            <div class="flex <?= $block->illustration_position() ?>">
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
        <?php endforeach ?>
    </main>

<?php snippet('footer'); ?>