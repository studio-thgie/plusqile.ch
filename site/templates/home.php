<?php snippet('header'); ?>

    <div class="bg-red">
        <?php snippet('nav'); ?>

        <header>
            <div class="px-4 mx-auto mt-10 mb-24 max-w-7xl logo">
                <img src="/assets/graphics/logo.svg" alt="plusQ'île Logo">
            </div>
        </header>

        <main class="grid grid-cols-2 gap-4 px-4 macy">
            <section>
                <p class="inline-block font-mono text-9xl font-bold hover:text-white hover:text-right">08-11<br>Juin<br>2023</p>
                <ul class="flex gap-7 text-xl">
                    <li><a class="underline" href="#">Programme</a></li>
                    <li><a class="underline" href="#">Billetterie</a></li>
                    <li><a class="underline" href="#">Offree générale</a></li>
                </ul>
            </section>
            <section>
                <p class="text-8xl font-bold text-white font-condensed">Cirque &amp; Arts<br>de la rue</p>
            </section>
            <section>
                <p class="mb-5 text-8xl font-bold text-center font-condensed">Impressions</p>
                <img class="w-full rounded-full" src="/assets/temp/impression_1.png" alt="Impression 1">

                <ul class="flex gap-7 text-xl">
                    <li><a class="underline" href="#">Gallery</a></li>
                </ul>
            </section>
            <section>
                <p class="px-8 py-4 italic font-thin bg-white border border-black border-20 text-17rem font-condensed hover:text-white hover:bg-transparent hover:border-white">L’assoc!</p>
            </section>
            <section>
                <p class="px-8 py-4 italic font-light border-t-4 border-b-4 border-black transition-all text-12rem hover:text-white hover:border-white hover:font-bold hover:px-0">Devenir<br>Membre</p>
            </section>
            <section>
                <a href="artistes.html" class="italic font-black text-13rem hover:text-white hover:font-works hover:font-bold">Artistes</a>
                <ul class="grid grid-cols-2 gap-7 text-xl">
                    <li><a class="underline" href="#">Bios</a></li>
                    <li><a class="underline" href="#">Galerie</a></li>
                    <li><a class="underline" href="#">Liens</a></li>
                    <li><a class="underline" href="#">Instagram</a></li>
                </ul>
            </section>
            <section class="relative">
                <a class="italic btn-benevoles font-condensed" href="https://plusqile23.gevma.ch" target="_blank">
                    <img class="w-full" src="/assets/graphics/button.svg" alt="Bénévoles Button Background">
                    <span class="absolute top-24 left-24 text-white text-17rem">Béné-<br>Voles</span>
                </a>
            </section>
            <section>
                <p class="font-mono font-bold text-12rem hover:text-white">Presse</p>
            </section>
            <section>
                <p class="px-8 py-4 text-9xl font-bold font-works hover:text-white">Éditions<br>passées</p>
            </section>
        </main>
    </div>

    <script src="/assets/node_modules/macy/dist/macy.js" defer></script>
    <script src="/assets/scripts/home.js" defer></script>

<?php snippet('header'); ?>