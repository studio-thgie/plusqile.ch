<nav class="flex items-start border-black md:border-b-2">
    <ul class="flex z-20 gap-4 p-2 font-mono text-2xl font-bold text-white bg-black md:p-4 md:text-5xl">
        <?php foreach($kirby->languages() as $language): ?>
            <li>
                <a class="uppercase" href="<?= $page->url($language->code()) ?>" hreflang="<?= $language->code() ?>">
                    <?= $language->code() ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

    <?php if($page->url() != $site->url()): ?>
        <a href="<?= $site->url() ?>" class="block z-20 p-2 mx-8 w-12 bg-black md:bg-transparent md:w-auto md:p-0 md:self-center">
            <img src="/assets/graphics/home.svg" alt="Home" class="md:min-w-max">
        </a>
    <?php else: ?>
        <div class="mx-8"></div>
    <?php endif ?>
    
    <?php $menu = $site->main_menu()->toPages(); ?>
    <?php if ($menu->isNotEmpty()) : ?>
    <ul id="nav" class="flex absolute top-0 left-0 z-10 flex-col flex-wrap gap-y-6 pt-20 pr-4 pb-8 pl-4 w-full max-h-0 text-3xl bg-white shadow-2xl opacity-0 transition-opacity md:bg-transparent md:static md:max-h-full md:opacity-100 md:gap-x-14 md:flex-row md:gap-y-4 md:shadow-none md:py-10 md:w-auto md:pl-0">
        <?php foreach ($menu as $menuItem) : ?>
            <li><a class="px-2 rounded-full border md:hover:bg-transparent md:hover:text-black md:p-0 md:border-none border-red hover:bg-red hover:text-white md:hover:underline" href="<?= $menuItem->url() ?>"><?= $menuItem->title() ?></a></li>
        <?php endforeach ?>
    </ul>
    <?php endif ?>

    <button id="toggle-nav" class="block absolute top-2 right-4 z-20 w-10 h-9 md:hidden">
        <div class="absolute left-1 top-2 w-8 bg-black transition-opacity" style="height: 3px;"></div>
        <div class="absolute left-1 top-4 w-8 bg-black transition-all" style="height: 3px;"></div>
        <div class="absolute left-1 top-4 w-8 bg-black transition-all" style="height: 3px;"></div>
        <div class="absolute left-1 top-6 w-8 bg-black transition-opacity" style="height: 3px;"></div>
    </button>
</nav>

<?php if($page->url() != $site->url()): ?>
<div class="hidden mx-8 my-12 md:block">
    <a href="javascript:history.back()" aria-label="Back to previous page">
        <img src="/assets/graphics/back-arrow.svg" alt="Back to previous page">
    </a>
</div>
<div class="mb-8 md:hidden"></div>
<?php endif ?>

<script>

    document.querySelector('#toggle-nav').addEventListener('click', () => {
        document.querySelector('#toggle-nav > div:first-child').classList.toggle('opacity-0')
        document.querySelector('#toggle-nav > div:last-child').classList.toggle('opacity-0')
        document.querySelector('#toggle-nav > div:nth-child(2)').classList.toggle('rotate-45')
        document.querySelector('#toggle-nav > div:nth-child(3)').classList.toggle('-rotate-45')

        document.querySelector('#nav').classList.toggle('max-h-0')
        document.querySelector('#nav').classList.toggle('opacity-100')
    })

</script>