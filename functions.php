<?php

function ufc_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');
//    set_post_thumbnail_size( $width = 0, $height = 0, $crop = false )
    
    add_image_size( 'spec_thumb', 190, 120, true );
    
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));

    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'gallery'
    ));    

    register_nav_menu('primary','Primary menu');
}

add_action('after_setup_theme','ufc_setup' );

function ufc_scripts() {
    wp_enqueue_style( 'normalize', get_template_directory_uri().'/normalize.css');
    wp_enqueue_style('style-css', get_stylesheet_uri() );
  //  wp_enqueue_style( 'media-style', get_template_directory_uri().'/css/media.css');
  //  wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css');
    

    wp_enqueue_script( 'jquery');
 //   wp_enqueue_script( 'totop', get_template_directory_uri().'/js/totop.js');
    wp_enqueue_script( 'menu', get_template_directory_uri().'/js/menu.js');
//    wp_enqueue_script( 'viewportchecker', get_template_directory_uri().'/js/viewportchecker.js');
//    wp_enqueue_script( 'wow', get_template_directory_uri().'/js/wow.js');
}

add_action( 'wp_enqueue_scripts', 'ufc_scripts' );

function load_font_awesome() {
  wp_enqueue_style( 'font-awesome-style', 'https://use.fontawesome.com/releases/v5.9.0/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'load_font_awesome' );

function load_font_google() {
  wp_enqueue_style( 'font-google-style', 'https://fonts.googleapis.com/css?family=Raleway:400,600,700,800,900|Roboto:300,400,400i,500,500i,700,900&display=swap&subset=cyrillic,cyrillic-ext' );
}
add_action( 'wp_enqueue_scripts', 'load_font_google' );


add_filter('excerpt_more', function($more) {
    return ' ...';
});

/**
 * Add a sidebar.
 */
function ufc_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'ufc' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'ufc' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'ufc_widgets_init' );

add_filter('comment_form_fields', 'ufc_reorder_comment_fields' );
function ufc_reorder_comment_fields( $fields ){
    $new_fields = array(); 
    $myorder = array('author','email','comment'); 
    foreach( $myorder as $key ){
        $new_fields[ $key ] = $fields[ $key ];
        unset( $fields[ $key ] );
    }
    if( $fields )
        foreach( $fields as $key => $val )
            $new_fields[ $key ] = $val;
    return $new_fields;
}

function ufc_list_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="comment-wrap-info">
        <div class="comment-author vcard">
        <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
        </div>
        <div class="comment-meta commentmetadata">
            <?php printf( __( '<cite class="fn author-name">%s</cite>' ), get_comment_author_link() ); ?>
            <br>
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>" class="comment-date">
            <?php
            /* translators: 1: date, 2: time */
            printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
            ?>
        </div>
    </div>
    <?php if ( $comment->comment_approved == '0' ) : ?>
         <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
          <br />
    <?php endif; ?>
    <div class="comment-text">
    <?php comment_text(); ?>
    </div>
    <div class="reply">
        <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
    <?php
    }