<?php
function ispe_sidebar()
{

    // Arguments used in all register_sidebar() calls.
    $shared_args = array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<span class="widgettitle">',
        'after_title'   => "</h2>\n",
    );

    register_sidebar(
        array_merge(
            $shared_args,
            [
                'name'        => __('Use Ethereum', 'ispe'),
                'id'          => 'ispe-use',
                'description' => __( 'Widgets in this area will be displayed in the first column in the footer.',
                    'ispe' ),
            ]
        )
    );

    register_sidebar(
        array_merge(
            $shared_args,
            [
                'name'        => __('Learn', 'ispe'),
                'id'          => 'ispe-learn',
                'description' => __( 'Widgets in this area will be displayed in the first column in the footer.',
                    'ispe' ),
            ]
        )
    );

    register_sidebar(
        array_merge(
            $shared_args,
            [
                'name'        => __('Developers', 'ispe'),
                'id'          => 'ispe-developers',
                'description' => __( 'Widgets in this area will be displayed in the first column in the footer.',
                    'ispe' ),
            ]
        )
    );

    register_sidebar(
        array_merge(
            $shared_args,
            [
                'name'        => __('Ecosystem', 'ispe'),
                'id'          => 'ispe-ecosystem',
                'description' => __( 'Widgets in this area will be displayed in the first column in the footer.',
                    'ispe' ),
            ]
        )
    );

    register_sidebar(
        array_merge(
            $shared_args,
            [
                'name'        => __('Enterprise', 'ispe'),
                'id'          => 'ispe-enterprises',
                'description' => __( 'Widgets in this area will be displayed in the first column in the footer.',
                    'ispe' ),
            ]
        )
    );

    register_sidebar(
        array_merge(
            $shared_args,
            [
                'name'        => __('About ispe.fr', 'ispe'),
                'id'          => 'ispe-about',
                'description' => __( 'Widgets in this area will be displayed in the first column in the footer.',
                    'ispe' ),
            ]
        )
    );

    register_sidebar(
        array_merge(
            $shared_args,
            [
                'name'        => __('Utils Link', 'ispe'),
                'id'          => 'link-utils-sidebar',
                'description' => __( 'Widgets in this area will be displayed in the first column in the footer.',
                    'ispe' ),
            ]
        )
    );

    register_sidebar(
        array_merge(
            $shared_args,
            [
                'name'          => __('Widget share post to social network', 'ispe'),
                'id'            => "share-post-social",
                'description'   => __('',
                    'ispe'),
            ]
        )
    );
}

add_action('init', 'ispe_sidebar');