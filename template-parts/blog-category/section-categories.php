<?php global $category_obj ?>
<div class="list-categories">
    <?php foreach (get_categories() as $category): ?>
        <div class="category <?= $category->term_id === $category_obj->term_id ? 'active' : '' ?>">
            <div class="icon-btn mx-3 bg-light" style="box-shadow: 0px 4px 79px rgba(92, 92, 92, 0.20); solid 1px #f4f4f4">
                <?php if ($icon = get_field('icon_category', $category)): ?>
                    <i class="text-white font-size-30"><?php get_template_part('template-parts/icons/icon', $icon) ?></i>
                <?php endif; ?>
            </div>
            <div class="category-info">
                <h3><?= $category->name; ?></h3>
                <p>
                    <span><?php get_template_part('template-parts/icons/icon', 'article') ?></span>
                    <?= $category->count; ?>
                </p>
            </div>
            <a href="<?= get_category_link($category->term_id) ?>" class="stretched-link"></a>
        </div>
    <?php endforeach; ?>

</div>