<?php snippet('header'); ?>

    <?php snippet('nav'); ?>
        
    <div class="mx-8 my-12">
        <a href="javascript:history.back()" aria-label="Back to previous page">
            <img src="/assets/graphics/back-arrow.svg" alt="Back to previous page">
        </a>
    </div>

    <main class="px-4 mx-auto max-w-7xl">
        <h1 class="inline-block relative px-10 py-8 mb-12 font-mono font-bold uppercase bg-white border border-red text-10rem rounded-100px">
            <img class="absolute top-0 -left-4" style="transform: translateY(-59%);" src="/assets/illustrations/02_ARTISTE/3_ARTISTES_illu-01.svg" alt="Illustration Artist Title">
            <?= $page->title() ?>
        </h1>
        <ul class="flex relative z-10 flex-row flex-wrap">
            <?php foreach($pages->children() as $child): ?>
                <li class="inline-block mr-16 mb-12"><a href="<?= $child->url() ?>" class="px-6 font-mono text-7xl bg-white rounded-full border transition-colors border-red hover:bg-red hover:text-white"><?= $child->title() ?></a></li>
            <?php endforeach ?>
        </ul>
        <div class="relative z-0">
            <img class="w-full -translate-y-56 pointer-events-none" src="/assets/illustrations/02_ARTISTE/3_ARTISTES_illu-02.svg" alt="Illustration Artist Footer">
        </div>
    </main>

<?php snippet('footer'); ?>