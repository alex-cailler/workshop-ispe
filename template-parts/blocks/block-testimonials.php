<section class="section <?= get_field('content_background') ? 'bg-lighter' : 'bg-white' ?>">
    <div class="">
        <h2 class="text-primary text-center w-75 m-auto"><?php the_field('testimonial_title'); ?></h2>
        <div>
            <div class="swiper-container py-9">
                    <div class="swiper-wrapper">
                    <?php if (have_rows('testimonials', 'option')): ?>
                        <?php while (have_rows('testimonials', 'option')): the_row() ?>

                            <div class="swiper-slide card p-md-5 p-4 testimonial shadow-lg">

                                <div class="d-flex align-items-center mb-4">
                                    <div class="testimonial-author-image-container">
                                        <?php if ($img = get_sub_field('author_image')): ?>
                                            <?= wp_get_attachment_image($img['id'],
                                                'small',
                                                false,
                                                [
                                                    'alt' => 'author testimonial image',
                                                    'class' => 'rounded-pill flex-shrink-0'
                                                ]
                                            ) ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="testimonial-author-info ms-3">
                                        <span class="d-block text-primary fw-bold has-xs-font-size lh-100 mb-1"><?php the_sub_field('author_name'); ?></span>
                                        <span class="d-block text-muted"><?php the_sub_field('author_job'); ?></span>
                                    </div>
                                </div>

                                <div class="testimonial-content">
                                    <i class="text-muted"><?php the_sub_field('content'); ?></i>
                                </div>

                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
