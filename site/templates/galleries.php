<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <div class="m-4 md:m-8">
        <ul class="flex gap-3 mb-4 md:mb-16">
            <li>
                <button class="px-4 text-2xl font-medium rounded-full border-2 transition-colors md:text-6xl border-red hover:bg-red hover:text-white transition-color filter-btn" data-filter="all">all</button>
            </li>
            <?php foreach($page->children() as $gallery): ?>
                <li>
                    <button class="px-4 text-2xl font-medium rounded-full border-2 transition-colors md:text-6xl border-red hover:bg-red hover:text-white transition-color filter-btn" data-filter="y-<?= $gallery->title() ?>"><?= $gallery->title() ?></button>
                </li>
            <?php endforeach ?>
        </ul>
    </div>

    <main class="md:m-4">
        <div class="isotope">
            <?php foreach($page->children() as $gallery): ?>
                <div class="p-4 w-full md:w-1/2 isotope-item y-<?= $gallery->title() ?> all">
                    <span class="inline-block px-4 text-2xl font-medium rounded-full border-2 transition-colors md:text-6xl border-red"><?= $gallery->title() ?></span>
                </div>
                <?php foreach($gallery->images() as $image): ?>
                    <div class="p-4 w-full md:w-1/2 isotope-item y-<?= $gallery->title() ?> all">
                        <img class="w-full rounded-full" src="<?= $image->url() ?>" loading="lazy">
                    </div>
                <?php endforeach ?>
            <?php endforeach ?>
        </div>
    </main>
    
    <script src="/assets/node_modules/isotope-layout/dist/isotope.pkgd.min.js" defer></script>
    <script src="/assets/scripts/galleries.js" defer></script>

<?php snippet('footer'); ?>