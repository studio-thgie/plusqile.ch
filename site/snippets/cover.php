
<?php if($page->cover()->isNotEmpty()): ?>
    <div class="flex flex-col content-center items-center mb-14">
        <img class="inline-block w-full rounded-full transition-all duration-300 cover" src="<?= $page->cover()->toFile()->thumb(['width' => 1280, 'format' => 'webp'])->url() ?>" alt="Cover">
    </div>
<?php endif ?>