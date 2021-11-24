<?php
    $column_number = get_field('container_number');
?>

<section class="section container-block" style="background-color: <?= get_field('container_background') ?? '#FFF' ?>">
    <div class="container">
        <div>
            <?php if (get_field('container_title_available')): ?>
                <div class="column-title mb-5 <?= get_field('container_title_center') ? 'text-center title-wrapper m-auto' : '' ?>">
                    <h2 class="has-lg-font-size"><?php the_field('container_title') ?></h2>
                </div>
            <?php endif; ?>
            <InnerBlocks />
        </div>
    </div>
</section>