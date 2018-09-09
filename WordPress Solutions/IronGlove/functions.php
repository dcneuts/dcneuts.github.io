<?php
if ( ! function_exists( 'ironglove_setup' ) ) :

function ironglove_setup() {

    load_theme_textdomain( 'ironglove', get_template_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );
    
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'ironglove' ),
        'social'  => __( 'Social Links Menu', 'ironglove' ),
    ) );

    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // ironglove_setup

add_action( 'after_setup_theme', 'ironglove_setup' );


if ( ! function_exists( 'ironglove_init' ) ) :

function ironglove_init() {
    
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

}
endif; // ironglove_setup

add_action( 'init', 'ironglove_init' );


if ( ! function_exists( 'ironglove_widgets_init' ) ) :

function ironglove_widgets_init() {

}
add_action( 'widgets_init', 'ironglove_widgets_init' );
endif;// ironglove_widgets_init



if ( ! function_exists( 'ironglove_customize_register' ) ) :

function ironglove_customize_register( $wp_customize ) {

    require_once "components/pg.blocks.wp/inc/blocks/wp_blocks_customizer_controls.php";

}
add_action( 'customize_register', 'ironglove_customize_register' );
endif;// ironglove_customize_register


if ( ! function_exists( 'ironglove_enqueue_scripts' ) ) :
    function ironglove_enqueue_scripts() {

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', false, null, true);

    wp_deregister_script( 'fontawesomeall' );
    wp_enqueue_script( 'fontawesomeall', get_template_directory_uri() . '/fontawesome/fontawesome-all.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'plugins' );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/components/pg.blocks.wp/js/plugins.js', false, null, true);

    wp_deregister_script( 'bskitscripts' );
    wp_enqueue_script( 'bskitscripts', get_template_directory_uri() . '/components/pg.blocks.wp/js/bskit-scripts.js', false, null, true);

    wp_deregister_script( 'jqueryparallax' );
    wp_enqueue_script( 'jqueryparallax', get_template_directory_uri() . '/js/jquery.parallax.min.js', false, null, true);

    wp_deregister_script( 'modernizr' );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr-3.5.0.min.js', false, null, true);

    wp_deregister_script( 'scripts' );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', false, null, true);

    wp_deregister_script( 'ieviewportbugworkaround' );
    wp_enqueue_script( 'ieviewportbugworkaround', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js', false, null, true);

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'fontawesomeall' );
    wp_enqueue_style( 'fontawesomeall', get_template_directory_uri() . '/fontawesome/fontawesome-all.min.css', false, null, 'all');

    wp_deregister_style( 'fasvgwithjs' );
    wp_enqueue_style( 'fasvgwithjs', get_template_directory_uri() . '/fontawesome/fa-svg-with-js.css', false, null, 'all');

    wp_deregister_style( 'blocks' );
    wp_enqueue_style( 'blocks', get_template_directory_uri() . '/components/pg.blocks.wp/css/blocks.css', false, null, 'all');

    wp_deregister_style( 'plugins' );
    wp_enqueue_style( 'plugins', get_template_directory_uri() . '/components/pg.blocks.wp/css/plugins.css', false, null, 'all');

    wp_deregister_style( 'stylelibrary' );
    wp_enqueue_style( 'stylelibrary', get_template_directory_uri() . '/components/pg.blocks.wp/css/style-library-1.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700', false, null, 'all');

    wp_deregister_style( 'style-2' );
    wp_enqueue_style( 'style-2', '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic', false, null, 'all');

    wp_deregister_style( 'style-3' );
    wp_enqueue_style( 'style-3', '//fonts.googleapis.com/css?family=Lora|Roboto', false, null, 'all');

    wp_deregister_style( 'mailchimp' );
    wp_enqueue_style( 'mailchimp', get_template_directory_uri() . '/css/mailchimp.css', false, null, 'all');

    wp_deregister_style( 'normalize' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.min.css', false, null, 'all');

    }
    add_action( 'wp_enqueue_scripts', 'ironglove_enqueue_scripts' );
endif;

// Removal of auto-generated <p> tags
remove_filter( 'the_excerpt', 'wpautop' );
//remove_filter( 'the_content', 'wpautop' );

// Custom Images Sizes
add_image_size( 'front-banner', 1280, 600, array('center', 'bottom') );
add_image_size( 'small-banner', 1000, 500, true );
add_image_size( 'single-banner', 1920, 800, true );
add_image_size( 'more-posts', 425, 250, true );

// Alternative Inner Index Page
function inner_index( $template ){
    if ( is_home() && is_paged() ){
        $alternate_template = locate_template( 'inner.php');
        if(!empty( $alternate_template ))
            $template = $alternate_template;
    }
    return $template;
}
add_filter('template_include','inner_index');

// Pagination Routine for Offset on First Page
add_action( 'pre_get_posts', 'ig_query_offset', 1 );
function ig_query_offset( &$query ) {
    if ( ! ( $query->is_home() || is_main_query() ) ) {
        return;
    }

    $offset = 0;
    $ppp = get_option( 'posts_per_page' );

    if ( $query->is_paged ) {
        $page_offset = $offset + ( ( $query->query_vars['paged']-1 ) * $ppp );
        $query->set( 'offset', $page_offset );
    }
    else {
        $query->set( 'posts_per_page', $offset + $ppp );
    }
}

add_filter( 'found_posts', 'ig_adjust_offset_pagination', 1, 2 );
function ig_adjust_offset_pagination( $found_posts, $query ) {

    $offset = -1;
    if ( $query->is_home() && is_main_query() ) {
        return $found_posts - $offset;
    }
    return $found_posts;
}

require_once "components/pg.blocks.wp/inc/blocks/wp_blocks.php";
require_once "inc/bootstrap/wp_bootstrap_navwalker.php";
require_once "inc/bootstrap/wp_bootstrap_pagination.php";