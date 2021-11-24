<?php
/**
 * A custom WordPress comment walker class to implement the Bootstrap 4 Media object in wordpress comment list.
 *
 * @package     WP Bootstrap 4 Comment Walker
 * @version     1.0.0
 * @author      Aymene Bourafai <bourafai.a@gmail.com> <www.aymenebourafai.com>
 * @license     http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link        https://github.com/bourafai/wp-bootstrap-4-comment-walker
 * @link        https://v4-alpha.getbootstrap.com/layout/media-object/
 */

class Bootstrap_Comment_Walker extends Walker_Comment {
    /**
     * Output a comment in the HTML5 format.
     *
     * @since 1.0.0
     *
     * @see wp_list_comments()
     *
     * @param object $comment the comments list.
     * @param int    $depth   Depth of comments.
     * @param array  $args    An array of arguments.
     */
    protected function html5_comment( $comment, $depth, $args ) {
        $tag = ( $args['style'] === 'div' ) ? 'div' : 'li';
        ?>
        <<?= $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $this->has_children ? 'has-children media commentary' : ' media commentary' ); ?>>
        <div class="d-flex w-100" id="div-comment-<?php comment_ID(); ?>">

            <?php if ( $args['avatar_size'] != 0  ): ?>
                <a href="<?= get_comment_author_url(); ?>" class="comment-avatar ">
                    <?= get_avatar( $comment, $args['avatar_size'],'mm','', array('class'=>"comment_avatar rounded-circle") ); ?>
                </a>
            <?php endif; ?>

            <div class="w-100">
                <div class="d-flex align-items-center justify-content-between">
                    <h4 class="commentary-author-name"><?= get_comment_author() ?></h4>
                    <div class="commentary-date">
                        <time class="small chip" datetime="<?php comment_time( 'c' ); ?>">
                            <?php comment_date() ?> à
                            <?php comment_time() ?>
                        </time>
                    </div>
                </div>

                <div class="commentary-text">
                    <?php comment_text(); ?>
                </div>
                <div class="comment-metadata flex-center">

                    <ul class="list-inline">
                        <?php comment_reply_link( array_merge( $args, array(
                            'add_below' => 'div-comment',
                            'depth'     => $depth,
                            'max_depth' => $args['max_depth'],
                            'before'    => '<li class="commentary-reply-link list-inline-item chip">',
                            'after'     => '</li>'
                        )));
                        ?>
                    </ul>
                </div>

            </div>
            <?php if ( '0' == $comment->comment_approved ) : ?>
                <div class="alert alert-danger">
                    <?php _e( 'Your comment is awaiting moderation.' ); ?>
                </div>
            <?php endif; ?>

        </div>
        </<?= $tag ?>>
        <?php
    }
}