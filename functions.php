<?php

// Require for gutenberg option
get_template_part('inc/gutenberg', 'color');

get_template_part('inc/gutenberg', 'font');

get_template_part('inc/gutenberg', 'style');


// Require for plugin option
get_template_part('inc/plugin', 'acf');

get_template_part('inc/plugin', 'acf-blocks');

get_template_part('inc/plugin', 'yoast');

get_template_part('inc/plugin', 'contact-form-7');


// Require for theme option
get_template_part('inc/theme', 'assets');

get_template_part('inc/theme', 'login');

get_template_part('inc/theme', 'headers');

get_template_part('inc/theme', 'helpers');

get_template_part('inc/theme', 'navigation');

get_template_part('inc/theme', 'shortcode');

get_template_part('inc/theme', 'sidebar');

get_template_part('inc/theme', 'support');
