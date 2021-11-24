<?php if ( post_password_required() ) {
return;
}

$portfolio_comment_count = get_comments_number();
?>

<div id="comments" class="py-5 comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">
    <?php
        ob_start();
        $commenter = wp_get_current_commenter();
        $req = true;
        $aria_req = ( $req ? " aria-required='true'" : '' );

        $comments_arg = array(
            'form'	=> array(
                    'class' => 'form-horizontal'
            ),
            'fields' => apply_filters( 'comment_form_default_fields',
                array(
                    'author' 				=> '<div class="form-group has-validation mb-3">' . '<label for="author">' . __( 'Name', 'ispe' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) . '<input id="author" name="author" class="form-control" type="text" value="" size="30"' . $aria_req . ' required />'. '<div id="d1" class="invalid-feedback"></div>' . '</div>',
                    'email'					=> '<div class="form-group has-validation mb-3">' .'<label for="email">' . __( 'Email', 'ispe' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) . '<input id="email" name="email" class="form-control" type="text" value="" size="30"' . $aria_req . ' required />'. '<div id="d2" class="invalid-feedback"></div>' . '</div>',
                    'url'					=> '')
            ),
            'comment_field'			=> '<div class="form-group mt-3 has-validation mb-3">' . '<label for="comment">' . __( 'Comment', 'ispe' ) . '</label><span>*</span>' . '<textarea id="comment" class="form-control" name="comment" rows="3" aria-required="true" required></textarea><div id="d3" class="invalid-feedback"></div>' . '</div>',
            'comment_notes_after' 	=> '',
            'class_submit'			=> 'btn btn-success text-white',
        );
    ?>

    <?php
        comment_form($comments_arg);
        echo str_replace('class="comment-form"','class="comment-form needs-validation"',ob_get_clean());
    ?>

    <div class="pt-6">
        <?php
        if ( have_comments() ) :
            ;
            ?>
            <h2 class="comments-title">
                <?php if ( '1' === $portfolio_comment_count ) : ?>
                    <?php esc_html_e( '1 comment', 'ispe' ); ?>
                <?php else : ?>
                    <?php
                    printf(
                    /* translators: %s: comment count number. */
                        esc_html( _nx( '%s comment', '%s comments', $portfolio_comment_count, 'Comments title', 'ispe' ) ),
                        esc_html( number_format_i18n( $portfolio_comment_count ) )
                    );
                    ?>
                <?php endif; ?>
            </h2><!-- .comments-title -->

            <ol class="comment-list">
                <?php

                    require_once('walkers/wp-bootstrap-comment-walker.php');

                    wp_list_comments( array(
                        'style'         => 'ul',
                        'max_depth'     => 2,
                        'short_ping'    => true,
                        'avatar_size'   => '50',
                        'walker'        => new Bootstrap_Comment_Walker(),
                    ) );
                ?>
            </ol><!-- .comment-list -->

            <?php
            the_comments_pagination(
                array(
                    'before_page_number' => esc_html__( 'Page', 'ispe' ) . ' ',
                    'mid_size'           => 0,
                    'prev_text'          => sprintf(
                        '%s <span class="nav-prev-text">%s</span>',
                        is_rtl() ? '->' : '<-',
                        esc_html__( 'Older comments', 'ispe' )
                    ),
                    'next_text'          => sprintf(
                        '<span class="nav-next-text">%s</span> %s',
                        esc_html__( 'Newer comments', 'ispe' ),
                        is_rtl() ?  '->' : '<-'
                    ),
                )
            );
            ?>

            <?php if ( ! comments_open() ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'ispe' ); ?></p>
        <?php endif; ?>
        <?php endif; ?>
    </div>

</div><!-- #comments -->