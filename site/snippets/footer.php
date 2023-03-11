
        <footer class="p-2 mt-10 border-t-2 border-white md:p-6">
            <?php $items = $site->footer_menu()->toStructure(); ?>
            <?php if ($items->isNotEmpty()) : ?>
                <ul class="flex gap-2 justify-center text-xs md:text-3xl">
                <?php foreach ($items as $item) : ?>
                <?php if ($pageLink = $item->pageLink()->toPage()) : ?>
                    <li><a href="<?= $pageLink->url() ?>" class="inline-block px-3 bg-white rounded-full border-2 border-red text-red hover:bg-red hover:text-white hover:border-white"><?= $item->linkTitle()->or($pageLink->title()) ?></a></li>
                <?php elseif ($item->externalLink()->isNotEmpty()) : ?>
                    <li><a target="_blank" href="<?= $item->externalLink() ?>" class="inline-block align-middle bg-white rounded-full border-2 border-red text-red hover:bg-red hover:text-white hover:border-white">
                        <?php if(str_contains($item->externalLink(), 'facebook')): ?>
                            <span class="flex justify-center items-center w-10 h-10 align-middle">
                                <?= svg("/assets/graphics/Facebook.svg"); ?>
                            </span>
                        <?php elseif(str_contains($item->externalLink(), 'instagram')): ?>
                            <span class="flex justify-center items-center w-10 h-10 align-middle">
                                <?= svg("/assets/graphics/Instagram.svg"); ?>
                            </span>
                        <?php elseif(str_contains($item->externalLink(), 'youtube')): ?>
                            <span class="flex justify-center items-center w-10 h-10 align-middle">
                                <?= svg("/assets/graphics/Youtube.svg"); ?>
                            </span>
                        <?php else: ?>
                        <?= $item->linkTitle()->or(Url::short($item->externalLink()->value())) ?>
                        <?php endif ?>
                    </a></li>
                <?php endif ?>
                <?php endforeach ?>
            </ul>
            <?php endif ?>
        </footer>
    
    </body>
</html>
