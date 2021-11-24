<?php

function ispe_setup_theme_supported_features()
{
    add_theme_support('align-wide');

    add_theme_support('editor-styles');

    add_editor_style( 'style-editor.css' );

    add_editor_style( 'assets/css/app.css' );
}

add_action('after_setup_theme', 'ispe_setup_theme_supported_features');