<?php get_header('blog') ?>

    <section class="search-header">
        <div class="search-hero-container">
            <div class="search-hero-text">
                <h1><?php _e('Recherche du blog', 'portfolio') ?></h1>
                <p><?php _e('Retrouvez l\'ensemble de mes articles !', 'portfolio'); ?></p>
            </div>
        </div>
        <div class="search-input-container overflow-top">
            <div class="search-input">
                <form id="searchform" method="get" action="<?= esc_url( home_url( '/' ) ); ?>">
                    <input type="text" class="search-field" name="s" placeholder="<?php _e('Rechercher', 'portfolio') ?>" value="<?= get_search_query(); ?>">
                    <button class="btn btn-primary text-white m-2"><?php _e('Rechercher', 'portfolio') ?></button>
                </form>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/blog/section', 'body-content') ?>

    <?= do_shortcode( '[signup_newsLetter]') ?>

<?php get_footer() ?>