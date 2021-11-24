<?php get_header() ?>
    <article id="article" class="mb-lg-9 mb-6">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>

                <?php $author_id = $post->post_author; ?>

                <section class="top-section" style="background-color: #2B6CEB;">
                    <div class="container">
                        <div>
                            <div class="meta-info text-center mb-4">
                                <span class="categorie-name"><?= get_the_category( $post->ID )[0]->name; ?></span>
                                <span class="dot">&#8226</span>
                                <span><?php the_field('read-time') ?></span>
                            </div>
                            <div class="title">
                                <?php the_title('<h3 class="text-white text-size-55 text-center">','</h3>'); ?>
                            </div>
                            <div class="mt-6">

                                <div>
                                    <div class="d-flex position-relative profile-card p-3">
                                        <?php $author = get_userdata( $author_id ); ?>
                                        <a href="<?= $author->user_url ?>" class="stretched-link"></a>
                                        <div class="profile-avatar">
                                            <img src="<?= get_avatar_url($author_id) ?>" width="140" height="140" class="avatar" alt="" />
                                        </div>
                                        <div class="ms-3">
                                            <div>
                                                <?= $author->first_name; ?>
                                                <?= $author->last_name; ?>
                                            </div>
                                            <div class="published-date">
                                                <?php _e(date( 'j F Y', strtotime($post->post_date) )) ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <div class="wrapper-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div class="pt-7">
                    <?php dynamic_sidebar('share-post-social') ?>
                </div>
                <?php comments_template(); // Par ici les commentaires ?>
            </div>



            <?php endwhile; ?>
        <?php endif; ?>
    </article>

    <section>
        <div class="container">
            <?= do_shortcode( '[signup_newsLetter]') ?>
        </div>
    </section>

<?php get_footer() ?>