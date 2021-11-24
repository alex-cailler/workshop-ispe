<div class="accordion" id="accordionExample">
    <?php if (have_rows('collapses')): ?>
        <?php while (have_rows('collapses')): the_row() ?>
        <?php $icon = get_sub_field('icon') ?>
        <div class="mb-5 shadow overflow-hidden" style="border-radius: 18px">
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-<?php the_row_index(); ?>" aria-expanded="true" aria-controls="collapseOne-<?php the_row_index(); ?>">
                        <?= wp_get_attachment_image($icon['id'], 'small', false) ?>
                        <?php the_sub_field('title'); ?>
                    </button>
                </h2>
                <div id="collapseOne-<?php the_row_index(); ?>" class="accordion-collapse collapse <?= get_row_index() === 1 ? 'show' : '' ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body" style="<?= $icon ? 'padding-left: 82px' : '' ?>">
                        <p class="has-s-font-size text-muted">
                            <?php the_sub_field('description'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>