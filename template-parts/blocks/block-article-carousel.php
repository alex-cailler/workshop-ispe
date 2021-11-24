<div class="article-carousel bg-gray-darker pt-9 pb-9">

    <div class="container">

        <div class="d-flex align-items-center flex-column mb-5">
            <span class="d-block text-uppercase text-muted fw-500"><?php _e('actualité', 'ispe'); ?></span>
            <?php if ($title = get_field('article_carousel_title')): ?>
                <h2 class="text-white text-center text-lg" style="width: 300px"><?= $title ?></h2>
            <?php endif; ?>

            <?php if ($description = get_field('article_carousel_description')): ?>
                <p class="text-muted text-center" style="width: 300px"><?= $description ?></p>
            <?php endif; ?>
        </div>

        <div class="d-flex justify-content-end mb-3">
            <a href="<?= get_permalink( get_option( 'page_for_posts' ) ); ?>" class="text-white">
                Voir tout les articles <?php get_template_part('template-parts/icons/icon', 'caret-right') ?>
            </a>
        </div>

        <div class="swiper-container overflow-hidden pb-2">
            <div class="swiper-wrapper">

                <?php if ($featured_posts = get_field('articles_carousel')): ?>
                    <?php foreach( $featured_posts as $featured_post ): ?>
                        <?php $post = get_post($featured_post['article']->ID); ?>
                        <div class="swiper-slide">
                            <article class="post-item">
                                <div class="post-thumbnail">
                                    <?= get_the_post_thumbnail($post->ID, 'small',
                                        [
                                            'class' => 'd-block',
                                            'alt' => 'image card',
                                            'style' => 'height: 320px; object-fit: cover; object-position: center;'
                                        ]);
                                    ?>
                                </div>
                                <div class="post-body bg-blur-light">
                                    <a href="<?= esc_url( get_post_permalink($post->ID) ); ?>" class="stretched-link">
                                        <h5 class="card-title"><?= esc_html( $post->post_title ); ?></h5>
                                    </a>
                                    <time datetime="<?php $post->post_date ?>"><?php _e(date( 'j F Y', strtotime($post->post_date) )) ?></time>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
            <div class="d-flex mt-3 justify-content-end">
                <div class="swiper-next swiper-pagination-item box-shadow"><?php get_template_part('template-parts/icons/icon', 'caret-left') ?></div>
                <div class="swiper-prev swiper-pagination-item box-shadow ml-2"><?php get_template_part('template-parts/icons/icon', 'caret-right') ?></div>
            </div>
        </div>
    </div>

</div>
