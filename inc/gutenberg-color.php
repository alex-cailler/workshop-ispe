<?php

function ispe_setup_theme_color() {

    $array_color = array(
        array( 'name' => 'primary',     'slug'  => 'primary',   'color' => '#1D1148' ),
        array( 'name' => 'secondary',   'slug'  => 'secondary', 'color' => '#FED330' ),
        array( 'name' => 'blue',        'slug'  => 'blue',      'color' => '#1586DB' ),
        array( 'name' => 'muted',       'slug'  => 'muted',     'color' => '#8C86A1' ),
        array( 'name' => 'light',       'slug'  => 'light',     'color' => '#F6F6F8' ),
        array( 'name' => 'black',       'slug'  => 'black',     'color' => '#151515' ),
        array( 'name' => 'white',       'slug'  => 'white',     'color' => '#FFFFFF' ),
    );

    add_theme_support( 'editor-color-palette', $array_color);
    add_theme_support( 'disable-custom-colors' );
    add_theme_support( 'disable-custom-gradients' );

    return $array_color;
}

add_action('after_setup_theme', 'ispe_setup_theme_color');