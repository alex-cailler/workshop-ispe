<?php

add_filter( 'wpcf7_autop_or_not', '__return_false' );

add_action( 'wp_print_scripts', function () {
	if ( ! is_page( 23 ) ) {
		wp_dequeue_script( 'google-recaptcha' );
		wp_dequeue_script( 'wpcf7-recaptcha' );
	}
} );