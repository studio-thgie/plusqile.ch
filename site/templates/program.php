<?php snippet('header'); ?>

    <?php snippet('nav', ['hide_back' => true]); ?>

    <?php
        $dates = [];
        $categories = [];
        $ages = [];
        $languages = [];

        foreach($page->children() as $event){
            foreach($event->performances()->toStructure() as $performance) {
                if(!in_array($performance->date()->toDate('d M'), $dates)) {
                    $dates[] = $performance->date()->toDate('d M');
                }
            }

            if(!in_array($event->category(), $categories)) {
                $categories[] = $event->category();
            }

            if(!in_array($event->age(), $ages)) {
                $ages[] = $event->age();
            }
            if(!in_array($event->language(), $languages)) {
                $languages[] = $event->language();
            }
        }

        $dates = array_unique($dates);
        $categories = array_unique($categories);
        $ages = array_unique($ages);
        $languages = array_unique($languages);
    ?>

    <section class="m-4 md:m-8">
        <ul class="flex gap-3 mb-4 md:mb-16">
            <?php foreach ($dates as $date): ?>
                <li>
                    <button class="px-4 text-2xl font-medium rounded-full border-2 transition-colors md:text-6xl border-red hover:bg-red hover:text-white transition-color filter-btn" data-filter="<?= $date ?>"><?= $date ?></button>
                </li>
            <?php endforeach ?>
        </ul>
        <ul class="flex gap-3 mb-2">
            <li>
                <button class="px-4 text-base text-white rounded-full border-2 transition-colors md:text-3xl border-red hover:bg-red hover:text-white filter-btn bg-red" data-filter="all">all</button>
            </li>
            <?php foreach ($categories as $category): ?>
                <li>
                    <button class="px-4 text-base rounded-full border-2 transition-colors md:text-3xl border-red hover:bg-red hover:text-white filter-btn" data-filter="<?= $category ?>"><?= $category ?></button>
                </li>
            <?php endforeach ?>
        </ul>
        <ul class="flex gap-3">
            <?php foreach ($ages as $age): ?>
                <li>
                    <button class="px-4 text-base rounded-full border-2 transition-colors md:text-3xl border-red hover:bg-red hover:text-white filter-btn" data-filter="<?= $age ?>"><?= $age ?></button>
                </li>
            <?php endforeach ?>
            <?php foreach ($languages as $language): ?>
                <li>
                    <button class="px-4 text-base rounded-full border-2 md:text-3xl border-red hover:bg-red hover:text-white transition-color filter-btn" data-filter="<?= $language ?>"><?= $language ?></button>
                </li>
            <?php endforeach ?>
        </ul>
    </section>

    <main class="grid grid-cols-2 gap-4 pt-4 m-4 md:m-8 md:mt-16 isotope">
        <?php foreach($page->children() as $event): ?>
            <?php snippet('event', ['event' => $event, 'horizontal' => false]); ?>
        <?php endforeach ?>
        <section class="mb-20 w-full isotope-item md:w-1/2 all">
            <img src="/assets/illustrations/2_PROGRAMM/PROGRAMM_IlluElement <?= rand(1, 10) ?>.svg" alt="">
        </section>
    </main>
    
    <script src="/assets/node_modules/isotope-layout/dist/isotope.pkgd.min.js" defer></script>
    <script src="/assets/scripts/program.js" defer></script>

<?php snippet('footer'); ?>
