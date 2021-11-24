<section class="mx-7 d-flex h-100 flex-column justify-content-center">
    <?php if( $img = get_field('image')): ?>
        <?= wp_get_attachment_image($img['id'], 'small', false, ['alt' => 'Image blog search page', 'class' => 'img-fluid']) ?>
    <?php endif; ?>
</section>