<section>
    <div class="search-card">
        <span><?php _e('Rechercher des articles', 'ispe'); ?></span>
        <form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="text" class="search-field" name="s" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>">
            <button class="btn btn-primary text-white"><?php _e('Rechercher', 'ispe'); ?></button>
        </form>
    </div>
</section>