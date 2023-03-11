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
    ?>

    <section class="m-4 md:m-8">
        <ul class="flex gap-3 mb-4 md:mb-16">
            <?php foreach ($dates as $date): ?>
                <li class="px-4 text-2xl font-medium rounded-full border-2 md:text-6xl border-red hover:bg-red hover:text-white transition-color"><?= $date ?></li>
            <?php endforeach ?>
        </ul>
        <ul class="flex gap-3 mb-2">
            <?php foreach ($categories as $category): ?>
                <li class="px-4 text-base rounded-full border-2 md:text-3xl border-red hover:bg-red hover:text-white transition-color"><?= $category ?></li>
            <?php endforeach ?>
        </ul>
        <ul class="flex gap-3">
            <?php foreach ($ages as $age): ?>
                <li class="px-4 text-base rounded-full border-2 md:text-3xl border-red hover:bg-red hover:text-white transition-color"><?= $age ?></li>
            <?php endforeach ?>
            <?php foreach ($languages as $language): ?>
                <li class="px-4 text-base rounded-full border-2 md:text-3xl border-red hover:bg-red hover:text-white transition-color"><?= $language ?></li>
            <?php endforeach ?>
        </ul>
    </section>

    <main class="grid grid-cols-2 gap-4 pt-4 m-4 md:m-8 md:mt-16 macy">
        <?php foreach($page->children() as $event): ?>
            <?php snippet('event', ['event' => $event, 'horizontal' => false]); ?>
        <?php endforeach ?>
    </main>
    
    <script src="/assets/node_modules/macy/dist/macy.js" defer></script>
    <script src="/assets/scripts/programme.js" defer></script>

<?php snippet('footer'); ?>
