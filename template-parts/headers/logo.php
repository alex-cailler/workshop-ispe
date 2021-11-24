<?php if (get_custom_logo() ): ?>
    <a href="<?php bloginfo('url'); ?>">
        <?= wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'small', false, [ 'class' => 'custom-logo', 'width' => 109, 'height' => 28  ] ); ?>
    </a>
<?php else: ?>
    <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
        <?php bloginfo('name'); ?>
    </a>
<?php endif; ?>
