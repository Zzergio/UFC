	
<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage UFC
 * @since UFC 1.0
 */
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
 
<div id="comments" class="comments-area">
 
    <?php if ( have_comments() ) : ?>
        <h3 class="comments-title">
            <?php
                printf( _nx( 'Один коментар по темі', 'Коментарів по темі: %1$s', get_comments_number(), 'comments title', 'ufc' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h3>
 
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 40,
                    'callback' => 'ufc_list_comment',
                    'max_depth' => 2
                ) );
            ?>
        </ol><!-- .comment-list -->
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'ufc' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&amp;larr; Старіші коменти', 'ufc' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Свіжі коменти &amp;rarr;', 'ufc' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Коменти закрито.' , 'ufc' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
<section class="comments">
    <?php 
    $comments_args = array(
        'fields' => array(
            'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . esc_html__( 'Ваше ім\'я' ) . ( $req ? '<span class="required"> *</span>' : '' ) . '</label> ' .
                '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' /></div>',
            'email' => '<div class="form-group comment-form-email"><label for="email">' . esc_html__( 'Ваш email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                '<input id="email" class="form-control" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '"  aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></div>', 
                ),
        'class_submit' => 'btn-default',
        'submit_field' => '<div class="sub-btn">%1$s %2$s</div>',
        'comment_field' => '<div class="form-group comment-form-comment"><label for="comment">' . esc_html_x( 'Ваш коментар', 'noun' ) . '</label> <textarea id="comment" class="form-textarea" name="comment" rows="3"  aria-required="true" required="required"></textarea></div>',
        'label_submit' => esc_html__( 'Заліпити комент' )
                );
    
    comment_form($comments_args); ?>
 </section>
</div><!-- #comments -->