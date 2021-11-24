<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#FED330"/>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md bg-white fixed-top py-3" role="navigation">
            <div class="container">

                <?php get_template_part('template-parts/headers/logo'); ?>

                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                        aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="nav-burger" id="nav-burger"></div>
                </button>

                <div id="navbar" class="collapse navbar-collapse">

                    <?php wp_nav_menu(array(
                            'theme_location' => 'main-nav',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'flex-grow-1 d-flex',
                            'container_id' => '',
                            'menu_class' => 'nav navbar-nav ms-auto',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker()
                        ));
                    ?>

                    <?php
                        $locations = get_nav_menu_locations();
                        $menu = wp_get_nav_menu_object( $locations[ 'primary' ] )
                    ?>

                    <a href="#" class="btn btn-primary">
                        <?= __('Contacter nous', 'ispe') ?>
                    </a>

            </div>
        </nav>
    </header>
</body>

