<section class="mt-6 mb-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-1 order-lg-0">
                <?php if (have_posts()): ?>
                    <div class="row">
                        <?php $count = 0 ?>
                        <?php while(have_posts()): the_post(); ?>
                            <?php if ($count === 0): ?>
                                <div class="col-lg-12">
                                    <?php get_template_part('template-parts/blog/section', 'article-expand') ?>
                                </div>
                            <?php else: ?>
                                <div class="col-lg-4 col-sm-6">
                                    <?php get_template_part('template-parts/blog/section', 'article-medium') ?>
                                </div>
                            <?php endif; ?>
                            <?php $count++ ?>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <p class="text-size-25 font-weight-600 text-center" style="color: #7e8993"><?php _e('Il n\'y a aucun résultat trouvé pour : ', 'portfolio'); ?><br>"<?= get_search_query() ?>"</p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-4 order-0 order-lg-1">
                <section class="ms-lg-6">
                    <p class="text-size-20 font-weight-700"><?php _e('Liste des categories', 'portfolio') ?></p>
                    <?php get_template_part('template-parts/blog-category/section', 'categories') ?>
                </section>
            </div>
        </div>
    </div>

    <?= do_shortcode( '[signup_newsLetter]') ?>

</section>
