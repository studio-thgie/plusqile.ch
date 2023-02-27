<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

    <main class="grid grid-cols-2 gap-4 m-8 macy">
    <?php foreach($page->children() as $event): ?>
        <section class="mb-20">
            <span class="inline-block px-8 py-3 mb-5 border border-red" style="border-radius: 80px">
                <span class="text-5xl font-bold time">18:30</span><br>
                <span class="font-mono text-6xl font-bold title"><?= $event->title() ?></span>
            </span>
            <div class="mb-8">
                <a href="<?= $event->artist()->toPage()->url() ?>" class="block text-5xl artists text-red hover:underline"><?= $event->artist()->toPage()->title() ?></a>
                <span class="block text-4xl category"><?= $event->category() ?></span>
                <span class="text-4xl meta">
                    <span class="font-light duration"><?= $event->duration() ?></span> / 
                    <span class="font-bold age"><?= $event->age() ?></span> / 
                    <span class="font-light language"><?= $event->language() ?></span>
                </span>
            </div>
            <div class="mb-8 text-4xl font-light">
                <?= $event->description() ?>
            </div>
            <div class="mb-8 text-3xl text-red">
                <span>Autres représentations:</span>
                <table>
                    <tr>
                        <td>Ve</td>
                        <td>10</td>
                        <td>20:00</td>
                    </tr>
                    <tr>
                        <td>Sa</td>
                        <td>11</td>
                        <td>20:30</td>
                    </tr>
                </table>
            </div>
            <div>
                <img class="rounded-full" src="<?= $event->cover()->toFile()->url() ?>" alt="Programme 1">
            </div>
        </section>
        <?php endforeach ?>
    </main>
    
    <script src="/assets/node_modules/macy/dist/macy.js" defer></script>
    <script src="/assets/scripts/programme.js" defer></script>

<?php snippet('footer'); ?>