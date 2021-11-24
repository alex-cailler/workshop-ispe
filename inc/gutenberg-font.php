<?php

function ispe_setup_theme_font() {

    add_theme_support( 'editor-font-sizes', array(
        array('name' => __( 'xs', 'ispe' ), 'size' => 18, 'slug' => 'xs'),
        array('name' => __( 's',  'ispe' ), 'size' => 20, 'slug' => 's'),
        array('name' => __( 'sm', 'ispe' ), 'size' => 22, 'slug' => 'sm'),
        array('name' => __( 'md', 'ispe' ), 'size' => 30, 'slug' => 'md'),
        array('name' => __( 'lg', 'ispe' ), 'size' => 50, 'slug' => 'lg'),
        array('name' => __( 'xl', 'ispe' ), 'size' => 60, 'slug' => 'xl')
    ) );

    add_theme_support('disable-custom-font-sizes');

}

add_action('after_setup_theme', 'ispe_setup_theme_color');