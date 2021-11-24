<?php $author_id = $post->post_author; ?>
<?php $author = get_userdata( $author_id ); ?>
<article class="article expand">
    <div class="article-image-container">
        <?= get_the_post_thumbnail($post->ID, 'small'); ?>
    </div>
    <div class="article-content-container">
        <h3 ><?= $post->post_title ?></h3>
        <p class="article-excerpt"><?= get_the_excerpt(); ?></p>

        <div class="article-content-author">
            <div class="article-author-avatar">
                <img src="<?= get_avatar_url($author_id) ?>" width="140" height="140" class="avatar" alt="" />
            </div>
            <div class="article-author-info">
                <div class="article-author-info--name">
                    <?= $author->first_name; ?>
                    <?= $author->last_name; ?>
                </div>
                <div class="article-published-date">
                    <?php _e(date( 'j F Y', strtotime($post->post_date) )) ?>
                </div>
            </div>
        </div>

        <a href="<?= get_permalink($post->ID) ?>" class="stretched-link"></a>
    </div>
</article>

<?php /*

        <div class="d-flex align-items-center mt-3 mb-4">
            <?php foreach( get_categories() as $category): ?>
                <div class="badge-categorie me-1" style="background-color: <?= get_field('color_categorie', $category) ?>"><?= $category->name ?></div>
            <?php endforeach; ?>
            <div class="ms-1 me-2">
                &#8226
            </div>
            <div class="article-time-read">
                4 min
            </div>
        </div>
        <?php


        $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 1,
            'post_status' => 'publish',
        ));
    ?>
 */?>