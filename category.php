<?php get_header('blog');
 $category_obj = get_queried_object();
?>

<main>

    <section class="search-header">
        <div class="search-hero-container" style="background-color: <?= get_field('color_category', $category_obj) ?>">
            <div class="search-hero-text">
                <h1><?= $category_obj->name ?></h1>
                <p><?= $category_obj->description; ?></p>
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


    <div class="container">

        <?php get_template_part('template-parts/blog/section', 'body-content') ?>

    </div>
</main>

<?php get_footer() ?>
