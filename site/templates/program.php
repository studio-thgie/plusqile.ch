<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <main class="grid grid-cols-2 gap-4 m-4 md:m-8 macy">
        <?php foreach($page->children() as $event): ?>
            <?php snippet('event', ['event' => $event, 'horizontal' => false]); ?>
        <?php endforeach ?>
    </main>
    
    <script src="/assets/node_modules/macy/dist/macy.js" defer></script>
    <script src="/assets/scripts/programme.js" defer></script>

<?php snippet('footer'); ?>