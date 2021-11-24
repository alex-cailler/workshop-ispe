<div class="mb-5">
    <div class="card p-4 p-sm-6 flex-column h-100 justify-content-between card-discover" style="box-shadow: 6px 11px 19px 6px #0000000f">
        <div class="pt-4 mb-5">

            <?php if ($img = get_field('image')): ?>
                <div class="card-discover-img pb-3">
                        <?= wp_get_attachment_image($img['id'], 'small', false, ['alt' => 'card image advantage', 'class' => 'img-fluid']) ?>
                </div>
            <?php endif; ?>

            <h3 class="has-md-font-size mb-4"><?php the_field('card_title') ?></h3>
            <p class="text-muted has-xs-font-size"><?php the_field('card_description'); ?></p>
        </div>
        <div>
            <InnerBlocks />
        </div>
    </div>
</div>