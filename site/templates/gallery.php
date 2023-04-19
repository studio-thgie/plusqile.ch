<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <main class="grid grid-cols-2 gap-4 px-4 macy">
        <?php foreach($page->images() as $image): ?>
            <img class="w-full rounded-full" src="<?= $image->thumb(['width' => 960, 'format' => 'webp'])->url() ?>" loading="lazy">
        <?php endforeach ?>
        <?php
            $videos = $page->youtube()->toStructure();
            foreach($videos as $video): ?>
            <?php if($video->id() != ''): ?>
            <div class="overflow-hidden w-full rounded-full video-container">
                <iframe
                    src="https://www.youtube.com/embed/<?= $video->id() ?>?controls=0"
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                    allowfullscreen></iframe>
            </div>
            <?php endif ?>
        <?php endforeach ?>
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

<?php snippet('footer'); ?>