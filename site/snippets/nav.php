<nav class="flex items-start border-b-2 border-black">
    <ul class="flex gap-4 p-4 text-5xl text-white bg-black">
        <?php foreach($kirby->languages() as $language): ?>
            <li>
                <a class="uppercase" href="<?= $page->url($language->code()) ?>" hreflang="<?= $language->code() ?>">
                    <?= $language->code() ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
    <ul class="flex flex-wrap gap-y-4 gap-x-14 px-14 py-10 text-3xl">
        <li><a class="hover:underline" href="programme.html">Programme</a></li>
        <li><a class="hover:underline" href="association.html">L'association</a></li>
        <li><a class="hover:underline" href="#">Editions passées</a></li>
        <li><a class="hover:underline" href="#">Infos pratique</a></li>
        <li><a class="hover:underline" href="engagement.html">Je m'engange</a></li>
        <li><a class="hover:underline" href="#">Pros</a></li>
        <li><a class="hover:underline" href="#">Ecoles et médiation</a></li>
        <li><a class="hover:underline" href="contact.html">Contact</a></li>
    </ul>
</nav>