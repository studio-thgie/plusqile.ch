
        <footer class="py-6 mt-10 border-t-2 border-white">
            <?php $menuItems = $site->footer_menu()->toStructure(); ?>
            <?php if ($menuItems->isNotEmpty()) : ?>
                <ul class="flex gap-2 justify-center text-3xl">
                <?php foreach ($menuItems as $menuItem) : ?>
                <?php if ($pageLink = $menuItem->pageLink()->toPage()) : ?>
                    <li><a href="<?= $pageLink->url() ?>" class="inline-block px-3 bg-white rounded-full border border-red text-red hover:bg-red hover:text-white hover:border-white" href="#"><?= $menuItem->linkTitle()->or($pageLink->title()) ?></a></li>
                <?php elseif ($menuItem->externalLink()->isNotEmpty()) : ?>
                    <li><a target="_blank" href="<?= $menuItem->externalLink() ?>" class="inline-block px-3 bg-white rounded-full border border-red text-red hover:bg-red hover:text-white hover:border-white" href="#"><?= $menuItem->linkTitle()->or(Url::short($menuItem->externalLink()->value())) ?></a></li>
                <?php endif ?>
                <?php endforeach ?>
            </ul>
            <?php endif ?>
        </footer>
    
    </body>
</html>
