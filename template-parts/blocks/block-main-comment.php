<div class="main-comment mt-6 me-md-9 me-md-0">
    <div class="main-comment-star-wrapper">
        <?php for ($i = 1; $i <= get_field('star_number'); $i++ ): ?>
            <?php get_template_part('template-parts/icons/icon', 'star-colored') ?>
        <?php endfor; ?>
        <?php for ($i = 0; $i <= (5 - get_field('star_number')); $i++ ): ?>
            <?php get_template_part('template-parts/icons/icon', 'star') ?>
        <?php endfor; ?>
    </div>

    <div class="main-comment-content">
        <p class="has-sm-font-size"><?php the_field('comment_content'); ?></p>
    </div>

    <div class="text-center main-comment-author-identity">
        <?php if ($author_link = get_field('comment_author_link')): ?>
            <a href="<?= $author_link ?>"><?php the_field('comment_author') ?></a>
        <?php else: ?>
            <p><?php the_field('comment_author') ?></p>
        <?php endif; ?>
    </div>
</div>