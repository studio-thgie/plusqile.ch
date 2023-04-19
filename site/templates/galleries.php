<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <div class="m-4 md:m-8">
        <ul class="flex flex-wrap gap-3 mb-4 md:mb-16">
            <li>
                <button class="px-4 text-2xl font-medium rounded-full border-2 transition-colors md:text-6xl border-red hover:bg-red hover:text-white transition-color filter-btn" data-filter="all"><?= t('show_all') ?></button>
            </li>
            <?php foreach($page->children() as $gallery): ?>
                <li>
                    <button class="px-4 text-2xl font-medium rounded-full border-2 transition-colors md:text-6xl border-red hover:bg-red hover:text-white transition-color filter-btn" data-filter="y-<?= $gallery->title() ?>"><?= $gallery->title() ?></button>
                </li>
            <?php endforeach ?>
            <li>
                <button class="px-4 text-2xl font-medium rounded-full border-2 transition-colors md:text-6xl border-red hover:bg-red hover:text-white transition-color filter-btn" data-filter="video">Videos</button>
            </li>
        </ul>
    </div>

    <main class="md:m-4">
        <div class="relative isotope">
            <?php foreach($page->children() as $gallery): ?>
                <div class="p-4 w-full md:w-1/2 isotope-item y-<?= $gallery->title() ?> all">
                    <span class="inline-block px-4 text-2xl font-medium rounded-full border-2 transition-colors md:text-6xl border-red"><?= $gallery->title() ?></span>
                </div>
                <?php foreach($gallery->images() as $image): ?>
                    <div class="p-4 w-full md:w-1/2 isotope-item y-<?= $gallery->title() ?> all">
                        <img class="w-full rounded-full" src="<?= $image->thumb(['width' => 960, 'format' => 'webp'])->url() ?>" loading="lazy">
                    </div>
                <?php endforeach ?>
                <?php
                    $videos = $gallery->youtube()->toStructure();
                    foreach($videos as $video): ?>
                    <?php if($video->id() != ''): ?>
                    <div class="w-full  p-4 md:w-1/2 isotope-item y-<?= $gallery->title() ?> all video">
                        <div class="overflow-hidden w-full rounded-full video-container">
                            <iframe
                                src="https://www.youtube.com/embed/<?= $video->id() ?>?controls=0"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endforeach ?>
        </div>
    </main>

    <style>
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
    
    <script src="/assets/node_modules/isotope-layout/dist/isotope.pkgd.min.js" defer></script>
    <script src="/assets/scripts/galleries.js" defer></script>

<?php snippet('footer'); ?>