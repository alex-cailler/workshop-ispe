<?php get_header() ?>

<main class="<? post_class() ?>">
    <div class="container">

        <?php get_template_part('template-parts/blog/section-top') ?>

        <?php get_template_part('template-parts/blog/section', 'body-content') ?>

        <section>
            <div class="container">
                <?= do_shortcode( '[signup_newsLetter]') ?>
            </div>
        </section>

    </div>
</main>

<?php get_footer() ?>


