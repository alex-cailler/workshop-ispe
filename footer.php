<footer class="py-6" id="footer">
    <div>
        <div class="footer-widgets">
            <div class="container">
                <div class="d-lg-flex footer-legal my-5">

                    <div class="text-md-start text-center" style="flex-shrink: 0">
                        <div class="footer-logo">
                            <?php get_template_part('template-parts/footer/logo', 'footer') ?>
                        </div>
                        <div class="mb-3 mt-5">
                            <img width="152" height="44" title="Ispe - Donwload" alt="Ispe - Apple Store" src="<?= get_template_directory_uri() . '/assets/images/apple-store-fr.png' ?>" />
                        </div>
                        <div>
                            <img width="152" height="44" title="Ispe - Donwload" alt="Ispe - Google play" src="<?= get_template_directory_uri() . '/assets/images/google-store-fr.png' ?>" />
                        </div>
                        <div class="d-flex justify-content-md-start justify-content-center mt-6">
                            <?php if (have_rows('socials', 'option')): ?>
                                <?php while (have_rows('socials', 'option')): the_row() ?>
                                    <a class="text-muted icon px-3" target="_blank" href="<?= get_sub_field('link') ?>">
                                        <i class="text-size-25"><?php get_template_part('template-parts/icons/icon', get_sub_field('icon')) ?></i>
                                    </a>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="row ms-auto mt-6 mt-lg-0 mt-mt-0">
                        <ul class="col-md-3 text-white order-0">
                            <?php dynamic_sidebar('ispe-use') ?>
                        </ul>
                        <ul class="col-md-3 text-white order-0">
                            <?php dynamic_sidebar('ispe-learn') ?>
                        </ul>
                        <ul class="col-md-3 text-white order-1">
                            <?php dynamic_sidebar('ispe-developers') ?>
                        </ul>
                        <ul class="col-md-3 text-white order-1">
                            <?php dynamic_sidebar('ispe-ecosystem') ?>
                        </ul>
                        <ul class="col-md-3 text-white order-1">
                            <?php dynamic_sidebar('ispe-enterprise') ?>
                        </ul>
                        <ul class="col-md-3 text-white order-1">
                            <?php dynamic_sidebar('ispe-about') ?>
                        </ul>
                    </div>

                </div>

                <div class="py-5">
                    <hr />
                </div>

                <p class="text-center has-s-font-size">
                    <?php _e('© 2021 16 boulvard générale de Gaulle - Nantes Ispe.fr All rights reserved.', 'ispe') ?>
                </p>

            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>