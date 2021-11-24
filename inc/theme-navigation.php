<?php

function ispe_create_menu()
{
    register_nav_menus([
        'main-nav' => __('top menu', 'alexandre'),
        'footer-legal' => __('bottom menu', 'alexandre'),
    ]);
}

add_action('init', 'ispe_create_menu');


function ispe_navigation_walker()
{
    if ( ! file_exists( get_template_directory() . '/walkers/class-wp-bootstrap-navwalker.php' ) ) {
        return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
    } else {
        require_once get_template_directory() . '/walkers/class-wp-bootstrap-navwalker.php';
    }

    if ( ! file_exists( get_template_directory() . '/walkers/class-wp-stripe-menu-walker.php' ) ) {
        return new WP_Error( 'class-wp-stripe-menu-walker-missing', __( 'It appears the class-wp-stripe-menu-walker.php file may be missing.', 'class-wp-stripe-menu-walker' ) );
    } else {
        require_once get_template_directory() . '/walkers/class-wp-stripe-menu-walker.php';
    }
}

add_action('init', 'ispe_navigation_walker');


function ispe_pagination() {
    echo '<nav aria-label="Pagination" class="my-4">';
    echo '<ul class="pagination">';
    $pages = paginate_links(['type' => 'array']);
    foreach ($pages as $page) {
        $active = strpos($page, 'current') !== false;
        $class = 'page-item rounded';
        if ($active) {
            $class .= 'active';
        }
        echo '<li class="' . $class . '">';
        echo str_replace('page-numbers', 'page-link', $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}