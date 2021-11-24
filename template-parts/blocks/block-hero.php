<section class="section hero">
    <div class="container hero-container">
        <div class="row">
            <div class="col-12 col-md-7 order-1 order-md-0 hero-content mt-4 mt-md-0 pe-0 pe-md-6">
                <h1 class="text-white font-family-title font-size-lg"><?php the_field('hero_title') ?></h1>
                <p class="text-muted has-sm-font-size mt-4 mb-5 <?= get_field('content_bold') ? 'fw-500' : 'fw-light' ?>"><?php the_field('hero_description') ?></p>
                <InnerBlocks />
            </div>
            <div class="col-12 col-md-5 hero-image order-0 order-md-1 d-flex justify-content-center">
                <?php if ($img = get_field('hero_image')): ?>
                    <?= wp_get_attachment_image($img['id'], 'small',false, [
                        'alt' => 'hero image',
                        'class' => get_field('image_shadow') ? 'shadow-lg img-fluid rounded-3' : 'img-fluid rounded-3',
                        'style' => 'object-fit: contain; height: 100%',
                    ] ) ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>