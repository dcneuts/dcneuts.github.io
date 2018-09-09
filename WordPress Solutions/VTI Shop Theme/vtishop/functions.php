<?php
if ( ! function_exists( 'vtishop_setup' ) ) :

function vtishop_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'vtishop', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'vtishop' ),
        'social'  => __( 'Social Links Menu', 'vtishop' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // vtishop_setup

add_action( 'after_setup_theme', 'vtishop_setup' );


if ( ! function_exists( 'vtishop_init' ) ) :

function vtishop_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // vtishop_setup

add_action( 'init', 'vtishop_init' );


if ( ! function_exists( 'vtishop_widgets_init' ) ) :

function vtishop_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
		'name' => __( 'Primary', 'vtishop' ),
		'id' => 'primary',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>'
	) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'vtishop_widgets_init' );
endif;// vtishop_widgets_init



if ( ! function_exists( 'vtishop_customize_register' ) ) :

function vtishop_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    require_once "inc/blocks/wp_blocks_customizer_controls.php";

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'vtishop_customize_register' );
endif;// vtishop_customize_register


if ( ! function_exists( 'vtishop_enqueue_scripts' ) ) :
    function vtishop_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.1.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'fontawesomeall' );
    wp_enqueue_script( 'fontawesomeall', get_template_directory_uri() . '/fontawesome/fontawesome-all.min.js', false, null, true);

    wp_deregister_script( 'bootstraphoverdropdown' );
    wp_enqueue_script( 'bootstraphoverdropdown', get_template_directory_uri() . '/assets/js/bootstrap-hover-dropdown.min.js', false, null, true);

    wp_deregister_script( 'modernizr' );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr-3.5.0.min.js', false, null, true);

    wp_deregister_script( 'plugins' );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', false, null, true);

    wp_deregister_script( 'bskitscripts' );
    wp_enqueue_script( 'bskitscripts', get_template_directory_uri() . '/js/bskit-scripts.js', false, null, true);

    wp_deregister_script( 'scripts' );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', false, null, true);

    wp_deregister_script( 'ieviewportbugworkaround' );
    wp_enqueue_script( 'ieviewportbugworkaround', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'fontawesomeall' );
    wp_enqueue_style( 'fontawesomeall', get_template_directory_uri() . '/fontawesome/fontawesome-all.min.css', false, null, 'screen');

    wp_deregister_style( 'stylelibrary' );
    wp_enqueue_style( 'stylelibrary', get_template_directory_uri() . '/css/style-library-1.css', false, null, 'all');

    wp_deregister_style( 'plugins' );
    wp_enqueue_style( 'plugins', get_template_directory_uri() . '/css/plugins.css', false, null, 'all');

    wp_deregister_style( 'blocks' );
    wp_enqueue_style( 'blocks', get_template_directory_uri() . '/css/blocks.css', false, null, 'all');

    wp_deregister_style( 'mailchimp' );
    wp_enqueue_style( 'mailchimp', get_template_directory_uri() . '/css/mailchimp.css', false, null, 'screen');

    wp_deregister_style( 'normalize' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/node_modules/normalize.css/normalize.css', false, null, 'screen');

    wp_deregister_style( 'styles' );
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.min.css', false, null, 'all');

    wp_deregister_style( 'wp-customizer-css' );
    wp_enqueue_style( 'wp-customizer-css', get_template_directory_uri() . '/css/custom-css.css', array(), null, 'all' );

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'vtishop_enqueue_scripts' );
endif;

/* Customizations */

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_filter( 'woocommerce_show_page_title', '__return_false' );
remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_shop_loop', 'storefront_woocommerce_pagination', 30 );

add_action( 'wp', 'remove_sidebar_singleprod_pages' );
 
function remove_sidebar_singleprod_pages() {
    if ( is_product() ) {
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
    }
}

function woo_archive_custom_cart_button_text() {
	return __( 'Buy', 'woocommerce' );
}
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );

function order_received_text( $text, $order ) {
	return 'Thank you... your order has been placed and is being processed! A receipt has been sent to you via email. Check your account for order details and status.';
}
add_filter('woocommerce_thankyou_order_received_text', 'order_received_text', 10, 2 );

function change_order_notes_placeholder( $fields ) {
	$fields['order']['order_comments']['placeholder'] = _x('Notes to us about your order...', 'placeholder', 'woocommerce');
	return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'change_order_notes_placeholder' );

// Custom Theme Image Sizes

add_image_size( 'shop-products', 200, 200, true );
add_image_size( 'shop-products-books', 200 );
add_filter( 'woocommerce_get_image_size_gallery_thumbnail', function( $size ) {
    return array(
        'width'  => 150,
        'height' => 150,
        'crop'   => 0,
    );
});

// Removal of auto-generated <p> tags
remove_filter( 'the_excerpt', 'wpautop' );
remove_filter( 'the_content', 'wpautop' );

// Visual Composer Registration Bugfix
add_action( 'init', function () {
	if ( isset( $_GET['forcedeactivate'] ) ) {
		delete_option( 'vc_license_activation_key' );
		delete_option( 'wpb_js_js_composer_purchase_code' );
	}
});

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/blocks/wp_blocks.php";

    /* Pinegrow generated Include Resources End */
?>