<div class="transition-all duration-300 title md:translate-x-1/2 title-wrapper">
    <h1 class="inline-block relative px-4 mb-12 max-w-full bg-white rounded-full border transition-all duration-300 md:-translate-x-1/2 md:px-10 border-red" style="hyphens: auto;">
        <?php if(isset($illustration)): ?>
            <img src="<?= $illustration ?>" class="title-illustration" alt="">
        <?php endif ?>
        <?= $title ?>
    </h1>
</div>