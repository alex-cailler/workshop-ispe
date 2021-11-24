<article class="article small">
    <div class="article-image-container">
        <?= get_the_post_thumbnail($post->ID, 'small'); ?>
    </div>
    <div class="article-content-container">
        <div class="article-content-icon">
            <span>
                <i><?php get_template_part('template-parts/icons/icon', 'eye') ?></i>
            </span>
            <h3 ><?= $post->post_title ?></h3>
        </div>
        <div class="article-content-author">
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
    </div>
    <a href="<?= get_permalink($post->ID) ?>" class="stretched-link"></a>
</article>