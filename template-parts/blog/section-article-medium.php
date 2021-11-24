<article class="article medium">
    <div class="article-image-container">
        <?= get_the_post_thumbnail($post->ID, 'small'); ?>
    </div>
    <div class="article-content-container">
        <h3 ><?= $post->post_title ?></h3>

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
