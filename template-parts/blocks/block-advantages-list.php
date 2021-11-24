<div class="row">
    <?php if (have_rows('advantages_list')): ?>
        <?php while (have_rows('advantages_list')): the_row() ?>
            <div class="col-10 col-sm-6 col-lg-3 mb-4 m-auto m-sm-0 card-advantage">
                <div class="card p-md-5 p-sm-2 p-3 shadow flex-column h-100 justify-content-between">
                    <div class="text-md-center">
                        <div>
                            <div class="card-advantage-img">
                                <?php if ($img = get_sub_field('image')): ?>
                                    <?= wp_get_attachment_image($img['id'], 'small', false, ['alt' => 'card image advantage', 'class' => 'img-fluid']) ?>
                                <?php endif; ?>
                            </div>
                            <h3 class="has-sm-font-size mb-4"><?php the_sub_field('title') ?></h3>
                        </div>
                        <p class="text-muted has-xs-font-size fw-light"><?php the_sub_field('description'); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="mt-6">
        <InnerBlocks />
    </div>
</div>
