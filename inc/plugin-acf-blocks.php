<?php
function ispe_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('A hero custom block'),
            'render_template'   => 'template-parts/blocks/block-hero.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true
            ),
            'keywords'          => array( 'ispe-hero', 'hero' ),
        ));

        acf_register_block_type(array(
            'name'              => 'content',
            'title'             => __('Content'),
            'description'       => __('A content custom block'),
            'render_template'   => 'template-parts/blocks/block-content.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true
            ),
            'keywords'          => array( 'ispe-content', 'content' ),
        ));

        acf_register_block_type(array(
            'name'              => 'phone',
            'title'             => __('Phone'),
            'description'       => __('A phone custom block'),
            'render_template'   => 'template-parts/blocks/block-phone.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true
            ),
            'keywords'          => array( 'ispe-phone', 'phone', 'ispe-phone' ),
        ));

        acf_register_block_type(array(
            'name'              => 'content-center',
            'title'             => __('Content center'),
            'description'       => __('A center content custom block'),
            'render_template'   => 'template-parts/blocks/block-content-center.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true
            ),
            'keywords'          => array( 'content-center', 'center-content', 'center', 'ispe-content-center' ),
        ));

        acf_register_block_type(array(
            'name'              => 'container',
            'title'             => __('Container'),
            'description'       => __('A cards custom block'),
            'render_template'   => 'template-parts/blocks/block-container.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true
            ),
            'keywords'          => array( 'container', 'wrapper', 'ispe-container', 'ispe-wrapper' ),
        ));

        acf_register_block_type(array(
            'name'              => 'advantages list',
            'title'             => __('Advantages list'),
            'description'       => __('A advantages list custom block'),
            'render_template'   => 'template-parts/blocks/block-advantages-list.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true
            ),
            'keywords'          => array( 'list', 'advantages list', 'list advantages', 'advantages', 'ispe-advantages' ),
        ));

        acf_register_block_type(array(
            'name'              => 'discover card',
            'title'             => __('Discover card'),
            'description'       => __('A discover card custom block'),
            'render_template'   => 'template-parts/blocks/block-discover-card.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true
            ),
            'keywords'          => array( 'card', 'discover card', 'card discover', 'discover', 'ispe-discover' ),
        ));

        acf_register_block_type(array(
            'name'              => 'testimonials',
            'title'             => __('Testimonials'),
            'description'       => __('A discover card custom block'),
            'render_template'   => 'template-parts/blocks/block-testimonials.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true
            ),
            'keywords'          => array( 'testimonials', 'ispe-testimonials' ),
        ));

        acf_register_block_type(array(
            'name'              => 'contact',
            'title'             => __('Contact'),
            'description'       => __('A contact custom block'),
            'render_template'   => 'template-parts/blocks/block-contact.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true
            ),
            'keywords'          => array( 'contact', 'ispe-contact' ),
        ));

        acf_register_block_type(array(
            'name'              => 'check line',
            'title'             => __('Check line'),
            'description'       => __('A check line custom block'),
            'render_template'   => 'template-parts/blocks/block-checkline.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true
            ),
            'keywords'          => array( 'check', 'line check', 'checkline', 'check line', 'check-line', 'ispe-checkline' ),
        ));

        acf_register_block_type(array(
            'name'              => 'main comment',
            'title'             => __('Main comment'),
            'description'       => __('A check main comment custom block'),
            'render_template'   => 'template-parts/blocks/block-main-comment.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true
            ),
            'keywords'          => array( 'main', 'main comment', 'comment', 'ispe-main-comment' ),
        ));

        acf_register_block_type(array(
            'name'              => 'targets',
            'title'             => __('Targets'),
            'description'       => __('A targets custom block'),
            'render_template'   => 'template-parts/blocks/block-targets.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true
            ),
            'keywords'          => array( 'targets', 'ispe-targets' ),
        ));

        acf_register_block_type(array(
            'name'              => 'collapses',
            'title'             => __('Collapses'),
            'description'       => __('A collapses custom block'),
            'render_template'   => 'template-parts/blocks/block-collapses.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true
            ),
            'keywords'          => array( 'collapses', 'ispe-collapses' ),
        ));


        acf_register_block_type(array(
            'name'              => 'articles-carousel',
            'title'             => __('Article Carousel'),
            'description'       => __('A articles carousel custom block'),
            'render_template'   => 'template-parts/blocks/block-article-carousel.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'supports'          => array(
                'align' => true,
                'mode' => true,
                'jsx' => true
            ),
            'keywords'          => array( 'carousel', 'ispe-carousel', 'articles' ),
        ));

    }
}

add_action('acf/init', 'ispe_init_block_types');
