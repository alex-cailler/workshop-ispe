<section class="section phone" id="app-demo-video">
    <div class="container phone-container">
        <div class="title-wrapper text-center m-auto">
            <h2 class="has-lg-font-size"><?= get_field('phone_title') ?></h2>
        </div>
        <div class="row phone-slide-container mt-6">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <?php if (have_rows('slides')): ?>
                    <ul class="phone-slide-list">
                        <?php while (have_rows('slides')): the_row() ?>
                            <li class="<?= get_row_index() === 1 ? 'active' : '' ?>" data-src="<?php the_sub_field('url') ?>"><div class="time-bar"><div class="progress-bar"></div></div><?php the_sub_field('title') ?></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <div class="pt-4">
                    <InnerBlocks />
                </div>
            </div>
            <div class="col-lg-4 mt-5 mt-sm-0 m-auto phone-slide">
                <div class="phone-slide-preview">
                    <video
                        poster="<?= get_template_directory_uri() . '/assets/images/video-poster.png' ?>"
                        class="h-100 w-100"
                        preload="auto"
                        muted
                        playsinline
                        webkit-playsinline
                        x5-playsinline
                        autoplay
                    >
                        <source src="<?= get_field('slides')[0]['url'] ?>" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>