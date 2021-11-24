<section class="section mt-6 <?= get_field('content_background') ? 'bg-lighter' : '' ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 pt-lg-0 pr-lg-9 pe-0 pe-md-6 order-1 order-lg-0">
                <div class="mb-5">
                    <h1 class="has-lg-font-size text-primary mb-4"><?php the_field('title'); ?></h1>
                    <p class="text-muted has-sm-font-size <?= get_field('description_bold') ? 'fw-500' : 'fw-light' ?>"><?php the_field('description'); ?></p>
                    <InnerBlocks />
                </div>
            </div>
            <div class="col-lg-5 mb-6 mb-lg-0 order-0 order-lg-1">
                <div class="card px-5 py-6 shadow rounded-3 bg-white position-relative">
                    <div class="mb-5">
                        <span class="d-block has-md-font-size fw-bold"><?php _e('Pour nous contacter c\'est ici que ça se passe !','binch') ?></span>
                    </div>
                    <?= do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
</section>