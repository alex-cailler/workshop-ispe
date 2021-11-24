<div class="content" style="background-color: transparent">
    <div class="container content-container">
        <div class="row">

            <?php if ($img = get_field('content_image')): ?>
                <div class="col-md-6 <?= get_field('content_image_right') ? 'order-md-1' : 'order-md-0'  ?> content-image">

                    <div class="content-image-container <?= get_field('image_large') ? 'large' : '' ?>">
                        <?= wp_get_attachment_image(
                            $img['id'],
                            'small',
                            false,
                            [
                                'alt' => 'content image',
                                'class' => get_field('image_shadow') ? 'shadow-lg img-fluid rounded-3 w-100 h-100' : 'img-fluid rounded-3 w-100 h-100',
                                'style' => 'object-fit: contain'
                            ]
                        ) ?>
                    </div>

                </div>
            <?php endif; ?>

            <div class="col-md-6 mt-5 content-info
                <?= get_field('content_center') ? 'flex-column d-flex justify-content-center' : '' ?>
                <?= get_field('content_image_right') ? 'order-md-0' : 'order-md-1'  ?>">

                <?php if ($img_logo = get_field('content_logo')): ?>
                    <?= wp_get_attachment_image(
                        $img_logo['id'],'small',
                        false,
                        [
                            'alt' => 'logo image',
                        ]
                    ) ?>
                <?php endif ?>


                    <h2 class="has-<?php the_field('title_size') ?>-font-size">
                        <?php the_field('content_title') ?>
                    </h2>
                    <p class="text-muted has-sm-font-size mb-5 mt-4 <?= get_field('content_bold') ? 'fw-500' : 'fw-light' ?>">
                        <?php the_field('content_description') ?>
                    </p>


                <InnerBlocks />

            </div>

        </div>
    </div>

    <?php if (get_field('potato_display')): ?>
        <?php
            $v = get_field('potato_color');
            $i = current( array_filter( binch_setup_theme_color(), function($e) use($v) {
                return $e['slug'] == $v;
            }));

            $pos = get_field('potato_location');
        ?>
        <div class="potato d-none d-lg-block <?= get_field('large_potato') ? 'large' : '' ?> <?= $pos ? $pos : 'right' ?>" style="background-color: <?= $i['color'] ?>"></div>
    <?php endif; ?>

</div>
