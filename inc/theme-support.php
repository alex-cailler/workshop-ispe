<?php

function ispe_theme_init()
{
    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support('title-tag');

    add_theme_support('custom-logo');

    // Enable post thumbnail
    add_theme_support('post-thumbnails');

    add_theme_support('html5', array('comment-list'));

    /*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
    add_theme_support(
        'html5',
        array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets',
        )
    );

    add_theme_support('custom-logo', array(
        'height'      => 28,
        'width'       => 109,
        'flex-height' => true,
        'flex-width'  => true,
        'unlink-homepage-logo' => true,
    ));

    /*
	* Make theme available for translation.
	* Translations can be filed in the /languages/ directory.
	*/
     load_theme_textdomain( 'ispe', get_template_directory() . '/languages' );


    add_theme_support( 'custom-background', array(
        'default-color' => 'FFFFFF',
    ) );
}

add_action('init', 'ispe_theme_init');


/**
 * Add 'no-js' class in body tag
 */
function ispe_add_js_body_class( $classes ) {
    $classes[] = 'no-js';

	return $classes;
}

add_filter( 'body_class', 'ispe_add_js_body_class' );


/**
 * Remove 'no-js' class to body tag if javascript is enables
 */
function ispe_support_js() {
    echo "<script>document.body.classList.remove('no-js');</script>";
}

add_action( 'wp_footer', 'ispe_support_js', 0 );
