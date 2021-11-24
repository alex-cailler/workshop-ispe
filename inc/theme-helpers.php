<?php

function get_value( &$value ) {
    return isset( $value ) && ! empty( $value ) && $value ? $value : false;
}

/**
 * @param $html
 *
 * @return string|string[]
 */
function change_logo_class( $html ) {

    $html = str_replace('custom-logo-link', 'custom-logo-link navbar-brand', $html);

    return $html;

}

add_filter( 'get_custom_logo', 'change_logo_class' );


add_filter('wpcf7_autop_or_not', '__return_false');