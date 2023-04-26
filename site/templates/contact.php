<?php snippet('header'); ?>

    <?php snippet('nav'); ?>

        <main class="px-4 mx-auto max-w-7xl default">
            <?php snippet('title', ['title' => $page->title()]); ?>
            <div class="mb-8 max-w-5xl">
                <?= $page->text_bottom() ?>
            </div>
            <div class="static gap-8 mb-9 md:flex">
                <div class="w-full md:w-1/2">
                    <?php if($success): ?>
                    <div class="alert success">
                        <p><?= t('email_success') ?></p>
                    </div>
                    <?php else: ?>
                        <?php if (isset($alert['error'])): ?>
                            <div class="alert error"><?= $alert['error'] ?><?= t($alert['error']) ?></div>
                        <?php endif ?>
                    <?php endif ?>
                    <form class="flex flex-col gap-5 mb-8 max-w-xl" method="post" action="<?= $page->url() ?>">
                        <div class="honeypot">
                            <label for="website">Website <abbr title="required">*</abbr></label>
                            <input type="url" id="website" name="website" tabindex="-1">
                        </div>
                        <input class="px-4 py-2 text-xl rounded-3xl border md:text-3xl focus:outline-none border-red placeholder:text-black" type="text" placeholder="<?= t('last_name') ?>" value="<?= esc($data['last_name'] ?? '', 'attr') ?>" name="last_name" required>
                        <input class="px-4 py-2 text-xl rounded-3xl border md:text-3xl focus:outline-none border-red placeholder:text-black" type="text" placeholder="<?= t('first_name') ?>" value="<?= esc($data['first_name'] ?? '', 'attr') ?>" name="first_name" required>
                        <div class="flex flex-col text-xl bg-white rounded-3xl border md:text-3xl border-red">
                            <input class="px-4 py-2 rounded-3xl focus:outline-none placeholder:text-black" value="<?= esc($data['street'] ?? '', 'attr') ?>" name="street" type="text" placeholder="<?= t('street_number') ?>">
                            <div class="flex">
                                <input class="px-4 py-2 w-28 rounded-3xl focus:outline-none placeholder:text-black" type="text" value="<?= esc($data['zip'] ?? '', 'attr') ?>" name="zip" placeholder="<?= t('zip') ?>">
                                <input class="px-4 py-2 rounded-3xl focus:outline-none placeholder:text-black" type="text" value="<?= esc($data['location'] ?? '', 'attr') ?>" name="location" placeholder="<?= t('location') ?>">
                            </div>
                        </div>
                        <input class="px-4 py-2 text-xl rounded-3xl border md:text-3xl focus:outline-none border-red placeholder:text-black" type="email" placeholder="<?= t('email') ?>" required value="<?= esc($data['email'] ?? '', 'attr') ?>" name="email">
                        <!--<select class="px-4 py-2 text-xl bg-white rounded-3xl border md:text-3xl focus:outline-none border-red" name="subject" id="subject">
                            <option value=""><?= t('subject') ?>:</option>
                            <?php
                            $options = $page->options_a_propos()->toStructure();
                            foreach ($options as $option): ?>
                            <option value="<?= $option->option() ?>"><?= $option->option() ?></option>
                            <?php endforeach ?>
                        </select>-->
                        <div>
                            <span class="inline-block px-4 py-2 mb-2 text-xl rounded-3xl border md:text-3xl focus:outline-none border-red"><?= t('subject') ?>:</span><br>
                            <?php
                            $options = $page->options_a_propos()->toStructure();
                            foreach ($options as $option): ?>
                            <label class="px-4 py-2 text-xl md:text-3xl">
                                <input class="inline-block w-6 h-6 rounded-3xl border appearance-none focus:outline-none border-red checked:bg-red" type="checkbox" value="<?= $option->option() ?>" name="subject[]"/>
                                <?= $option->option() ?>
                            </label><br>
                            <?php endforeach ?>
                        </div>
                        <textarea class="px-4 py-2 text-xl rounded-3xl border md:text-3xl focus:outline-none border-red placeholder:text-black" name="text" id="text" cols="30" rows="10" required placeholder="<?= t('message') ?>"><?= esc($data['text'] ?? '') ?></textarea>
                        <input class="px-4 py-2 text-xl text-left bg-white rounded-3xl border transition-colors cursor-pointer md:text-3xl border-red hover:bg-red hover:text-white" type="submit" name="submit" value="<?= t('send') ?>">
                    </form>
                </div>
                <div class="w-full md:w-1/2">
                    <?php if($page->benevoles_toggle() == 'true'): ?>
                        <div class="relative">
                            <?= snippet('btn-benevoles', ['url' => $page->benevoles_url()]); ?>
                        </div>
                    <?php else: ?>
                        <div class="relative">
                            <img class="relative z-50 transition-opacity hover:opacity-0" src="/assets/illustrations/5_MEMBRE/MEMBRE_animElement 1.svg" alt="">
                            <img class="absolute top-0 left-0 z-10 w-full" src="/assets/illustrations/5_MEMBRE/MEMBRE_animElement 2.svg" alt="">
                        </div>
                    <?php endif ?>
                </div>
            </div>
            <div class="mb-5 max-w-5xl">
                <?= $page->text_bottom() ?>
            </div>
            <?php if($page->type() == 'contact'): ?>
            <div>
                <img class="rounded-full border border-red" src="/assets/temp/map.png" alt="Map">
            </div>
            <?php endif ?>
        </main>

        <style>
            .honeypot {
                position: absolute;
                left: -9999px;
            }
        </style>

<?php snippet('footer'); ?>
