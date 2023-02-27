<nav class="flex border-b-2 border-black">
    <div>
        <ul class="flex gap-4 p-4 text-5xl text-white bg-black">
            <?php foreach($kirby->languages() as $language): ?>
                <li>
                    <a class="uppercase" href="<?= $page->url($language->code()) ?>" hreflang="<?= $language->code() ?>">
                        <?= $language->code() ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
    <?php if($page->url() != $site->url()): ?>
    <div class="flex items-center ml-14">
        <a href="<?= $site->url() ?>">
            <img src="/assets/graphics/home.svg" alt="Home">
        </a>
    </div>
    <?php endif ?>
    <?php $menu = $site->main_menu()->toPages(); ?>
    <?php if ($menu->isNotEmpty()) : ?>
    <ul class="flex flex-wrap gap-y-4 gap-x-14 px-14 py-10 text-3xl">
        <?php foreach ($menu as $menuItem) : ?>
            <li><a class="hover:underline" href="<?= $menuItem->url() ?>"><?= $menuItem->title() ?></a></li>
        <?php endforeach ?>
    </ul>
    <?php endif ?>
</nav>