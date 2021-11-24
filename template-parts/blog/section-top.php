<section class="mt-9 shadow-lg p-md-6 p-4 rounded-3" id="hero-blog-home">

    <div>
        <h1 class="text-white" style="line-height: 27px;">
            <span class="text-size-30" style="font-weight: 300">ISPE - Blog</span>
            <br />
            <span style="font-size: 3rem">
                <?php _e('Bienvenue sur le blog de ISPE !', 'ispe'); ?>
            </span>
        </h1>
        <p class="font-weight-300 text-white col-12 col-lg-6 my-5 text-size-20 lh-170"><?php _e('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'ispe') ?></p>
    </div>

    <div class="search-input-container m-0">

            <form id="searchform" method="get" action="<?= esc_url( home_url( '/' ) ); ?>">
                <div id="mc_embed_signup_scroll">
                    <div class="form-group">
                        <input type="text" name="EMAIL" class="form-control" placeholder="<?php _e('Rechercher', 'ispe') ?>" value="<?= get_search_query(); ?>">
                    </div>
                    <div class="mt-3"><input type="submit" value="Recherche" name="subscribe" id="mc-embedded-subscribe" class="btn btn-success text-white"></div>
                </div>
            </form>
    </div>

<!--    <div class="pb-6 pt-5">-->
<!--        <p class="text-white">--><?php //_e('Suivez toutes mes activités sur mes réseaux', 'ispe') ?><!--</p>-->
<!--        <div class="d-flex">-->
<!--            --><?php //if (have_rows('socials', 'option')): ?>
<!--                --><?php //while (have_rows('socials', 'option')): the_row()  ?>
<!--                    <a class="icon-btn mx-3" target="_blank" href="--><?//= get_sub_field('link') ?><!--" style="border-radius: 50rem">-->
<!--                        --><?php //if ($icon = get_sub_field('icon')): ?>
<!--                            <i class="text-size-20">--><?php //get_template_part('template-parts/icons/icon', $icon) ?><!--</i>-->
<!--                        --><?php //endif; ?>
<!--                    </a>-->
<!--                --><?php //endwhile; ?>
<!--            --><?php //endif; ?>
<!--        </div>-->
<!--    </div>-->

</section>