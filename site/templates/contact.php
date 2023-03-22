<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

        <main class="px-4 mx-auto max-w-7xl">
            <?php snippet('title', ['title' => $page->title()]); ?>
            <div class="mb-8 max-w-5xl text-base font-light md:text-5xl">
                <?= $page->text_bottom() ?>
            </div>
            <div class="static gap-8 mb-9 md:flex">
                <div class="w-full md:w-1/2">
                    <form class="flex flex-col gap-5 mb-8 max-w-xl">
                        <input class="px-4 py-2 text-xl rounded-3xl border md:text-3xl focus:outline-none border-red" type="text" placeholder="Nom" required>
                        <input class="px-4 py-2 text-xl rounded-3xl border md:text-3xl focus:outline-none border-red" type="text" placeholder="Prénom" required>
                        <div class="flex flex-col text-xl bg-white rounded-3xl border md:text-3xl border-red">
                            <input class="px-4 py-2 rounded-3xl focus:outline-none" type="text" placeholder="Rue / N°">
                            <input class="px-4 py-2 rounded-3xl focus:outline-none" type="text" placeholder="NPA">
                        </div>
                        <input class="px-4 py-2 text-xl rounded-3xl border md:text-3xl focus:outline-none border-red" type="email" placeholder="E-mail" required>
                        <select class="px-4 py-2 text-xl bg-white rounded-3xl border md:text-3xl focus:outline-none border-red" name="apropos" id="apropos">
                            <option value="">À propos:</option>
                            <?php
                            $options = $page->options_a_propos()->toStructure();
                            foreach ($options as $option): ?>
                            <option value="<?= $option->option() ?>"><?= $option->option() ?></option>
                            <?php endforeach ?>
                        </select>
                        <textarea class="px-4 py-2 text-xl rounded-3xl border md:text-3xl focus:outline-none border-red" name="message" id="message" cols="30" rows="10" placeholder="Communication"></textarea>
                        <input class="px-4 py-2 text-xl text-left bg-white rounded-3xl border transition-colors cursor-pointer md:text-3xl border-red hover:bg-red hover:text-white" type="submit" value="Envoi">
                    </form>
                </div>
                <div class="w-full md:w-1/2">
                    <?php if($page->benevoles_toggle() == 'true'): ?>
                        <div class="relative">
                            <a class="italic btn-benevoles font-condensed" href="<?= $page->benevoles_url() ?>" target="_blank">
                                <img class="w-full" src="/assets/graphics/button.svg" alt="Bénévoles Button Background">
                                <span class="absolute top-24 left-24 text-white drop-shadow-xl" style="font-size: 15vw; line-height: 1;">Béné-<br>Voles</span>
                            </a>
                        </div>
                    <?php else: ?>
                        <div class="relative">
                            <img class="relative z-50 transition-opacity hover:opacity-0" src="/assets/illustrations/5_MEMBRE/MEMBRE_animElement 1.svg" alt="">
                            <img class="absolute top-0 left-0 z-10 w-full" src="/assets/illustrations/5_MEMBRE/MEMBRE_animElement 2.svg" alt="">
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <div class="mb-5 max-w-5xl text-base font-light md:text-5xl">
                <?= $page->text_bottom() ?>
            </div>
            <?php if($page->type() == 'contact'): ?>
            <div>
                <img class="rounded-full border border-red" src="/assets/temp/map.png" alt="Map">
            </div>
            <?php endif ?>
        </main>

<?php snippet('footer'); ?>
