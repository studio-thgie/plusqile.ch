
<?php if($page->cover()->isNotEmpty()): ?>
    <div class="flex flex-col content-center items-center mb-14">
        <img class="inline-block rounded-full" src="<?= $page->cover()->toFile()->url() ?>" alt="Cover">
    </div>
<?php endif ?>