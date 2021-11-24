<section class="section target">

    <div class="container">

                <div class="row">
                    <div class="col-4">
                        <div class="swiper-container  swiper-contents">
                            <div class="swiper-wrapper">

                                <?php if(have_rows('targets')): ?>
                                    <?php while(have_rows('targets')): the_row() ?>
                                        <div class="swiper-slide">
                                            <h2 class="has-sm-font-size"><?php the_sub_field('title'); ?></h2>
                                            <p class="has-sm-font-size"><?php the_sub_field('description'); ?></p>
                                            <div>
                                                <a class="btn btn-primary btn-sm rounded-pill" href="<?php the_sub_field('url'); ?>"><?php _e('en savoir plus', 'binch') ?></a>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="swiper-container swiper-images">
                            <div class="swiper-wrapper">

                                <?php if(have_rows('targets')): ?>
                                    <?php while(have_rows('targets')): the_row() ?>
                                        <div class="swiper-slide">

                                            <?php if($img = get_sub_field('image')): ?>
                                                <div class="wrapper-image">
                                                    <?= wp_get_attachment_image($img['id'], 'small', false, ['alt' => 'target image', 'class' => 'img-fluid']) ?>
                                                </div>
                                            <?php endif; ?>

                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="swiper-container swiper-advantages">
                            <div class="swiper-wrapper">

                                <?php if(have_rows('targets')): ?>
                                    <?php while(have_rows('targets')): the_row() ?>
                                        <div class="wrapper-slide flex-shrink-0">
                                            <div>
                                                
                                                <?php if (have_rows('advantages')): ?>
                                                    <?php while(have_rows('advantages')): the_row() ?>
                                                        <div class="advantage-card">
                                                            <?php if ($img = get_sub_field('image')): ?>
                                                                <?= wp_get_attachment_image($img['id'], 'small', false, ['alt' => 'advantage image', 'class' => '']) ?>
                                                            <?php endif; ?>
                                                            <h3 class="has-xs-font-size text-center"><?php the_sub_field('title') ?></h3>
                                                            <p class="has-xs-font-size text-center"><?php the_sub_field('description'); ?></p>
                                                        </div>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>

    </div>

</section>
