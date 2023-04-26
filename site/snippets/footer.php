
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

        
        <button class="fixed right-4 bottom-4 z-50 p-3 w-12 h-12 bg-white rounded-full border-2 opacity-0 transition-all rotate-180 cursor-pointer to-top md:text-3xl border-red hover:bg-red hover:text-white transition-color">
            <img src="/assets/graphics/arrow-down.svg" alt="Arrow down">
        </button>

        <script src="/assets/scripts/all.js" defer></script>
    
    </body>
</html>
