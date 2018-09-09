<?php

if ( ! function_exists( 'cook_along_podcast_setup' ) ) :

	function cook_along_podcast_setup() {


    load_theme_textdomain( 'cookalong_podcast', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 825, 510, true );

		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'cook_along_podcast' ),
			'social'  => __( 'Social Links Menu', 'cook_along_podcast' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );

		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat'
		) );
	}
endif; // cook_along_podcast_setup

add_action( 'after_setup_theme', 'cook_along_podcast_setup' );


if ( ! function_exists( 'cook_along_podcast_init' ) ) :

	function cook_along_podcast_init() {


		register_taxonomy_for_object_type( 'category', 'attachment' );
		register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    register_post_type('recipe', array(
		'labels' => 
			array(
				'name' => __( 'Recipes', 'cookalong_podcast' ),
				'singular_name' => __( 'Recipe', 'cookalong_podcast' )
			),
		'public' => true,
		'hierarchical' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
		'show_in_menu' => true,
		'taxonomies' => array( 'recipe_categories' )
	));

    register_taxonomy('recipe_categories', 'recipe', array(
		'labels' => 
			array(
				'name' => __( 'Recipe Categories', 'cookalong_podcast' ),
				'singular_name' => __( 'Receipe Category', 'cookalong_podcast' )
			),
		'hierarchical' => true
	));

	}
endif; // cook_along_podcast_setup

add_action( 'init', 'cook_along_podcast_init' );


if ( ! function_exists( 'cook_along_podcast_widgets_init' ) ) :

	function cook_along_podcast_widgets_init() {

    register_sidebar( array(
		'name' => __( 'Primary Sidebar', 'cookalong_podcast' ),
		'id' => 'primary-sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>'
	) );

	}

	add_action( 'widgets_init', 'cook_along_podcast_widgets_init' );
endif;// cook_along_podcast_widgets_init


if ( ! function_exists( 'cook_along_podcast_customize_register' ) ) :

	function cook_along_podcast_customize_register( $wp_customize ) {

    require_once "inc/blocks/wp_blocks_customizer_controls.php";

    $wp_customize->add_section( 'footer_control_section', array(
		'title' => __( 'Footer Settings', 'cookalong_podcast' )
	));

    $wp_customize->add_section( 'main_header', array(
		'title' => __( 'Main Header Settings', 'cookalong_podcast' )
	));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_section( 'error_header', array(
		'title' => __( 'Error Header Settings', 'cookalong_podcast' )
	));

    $wp_customize->add_setting( 'error_header_bg', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'error_header_bg', array(
		'label' => __( 'Error Header Background', 'cookalong_podcast' ),
		'type' => 'media',
		'mime_type' => 'image',
		'section' => 'error_header'
	) ) );

    $wp_customize->add_setting( 'main_header_title', array(
		'type' => 'theme_mod',
		'default' => __( 'The Cookalong Podcast', 'cookalong_podcast' ),
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'main_header_title', array(
		'label' => __( 'Main Header Title', 'cookalong_podcast' ),
		'type' => 'text',
		'section' => 'main_header',
		'input_attrs' => 
			array(
				'placeholder' => 'Site Title'
			)
	));

    $wp_customize->add_setting( 'main_title_color', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_title_color', array(
		'label' => __( 'Header Title Color', 'cookalong_podcast' ),
		'type' => 'color',
		'section' => 'main_header'
	) ) );

    $wp_customize->add_setting( 'navbar-background', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navbar-background', array(
		'label' => __( 'Navbar Background Color', 'cookalong_podcast' ),
		'type' => 'color',
		'section' => 'main_header'
	) ) );

    $wp_customize->add_setting( 'main_header_bg', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'main_header_bg', array(
		'label' => __( 'Main Header Background', 'cookalong_podcast' ),
		'type' => 'media',
		'mime_type' => 'image',
		'section' => 'main_header'
	) ) );

    $wp_customize->add_setting( 'footer_background', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background', array(
		'label' => __( 'Footer Background Color', 'cookalong_podcast' ),
		'type' => 'color',
		'section' => 'footer_control_section'
	) ) );

	}

	add_action( 'customize_register', 'cook_along_podcast_customize_register' );
endif;// cook_along_podcast_customize_register


if ( ! function_exists( 'cook_along_podcast_enqueue_scripts' ) ) :
	function cook_along_podcast_enqueue_scripts() {


    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.1.min.js', false, null, true);

    wp_deregister_script( 'mob' );
    wp_enqueue_script( 'mob', get_template_directory_uri() . '/js/mob.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'jqueryparallax' );
    wp_enqueue_script( 'jqueryparallax', get_template_directory_uri() . '/js/jquery.parallax.min.js', false, null, true);

    wp_deregister_script( 'fontawesome' );
    wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/js/fontawesome.min.js', false, null, true);

    wp_deregister_script( 'plugins' );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', false, null, true);

    wp_deregister_script( 'bskitscripts' );
    wp_enqueue_script( 'bskitscripts', get_template_directory_uri() . '/js/bskit-scripts.js', false, null, true);

    wp_deregister_script( 'jquerymatchheightmin' );
    wp_enqueue_script( 'jquerymatchheightmin', get_template_directory_uri() . '/js/jquery.matchHeight-min.js', false, null, true);

    wp_deregister_script( 'custom' );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', false, null, true);

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'fontawesome' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/fontawesome.min.css', false, null, 'all');

    wp_deregister_style( 'fasvgwithjs' );
    wp_enqueue_style( 'fasvgwithjs', get_template_directory_uri() . '/css/fa-svg-with-js.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,700|Hind:400,700|Proza+Libre:400,700', false, null, 'all');

    wp_deregister_style( 'stylelibrary' );
    wp_enqueue_style( 'stylelibrary', get_template_directory_uri() . '/css/style-library-1.css', false, null, 'all');

    wp_deregister_style( 'plugins' );
    wp_enqueue_style( 'plugins', get_template_directory_uri() . '/css/plugins.css', false, null, 'all');

    wp_deregister_style( 'blocks' );
    wp_enqueue_style( 'blocks', get_template_directory_uri() . '/css/blocks.css', false, null, 'all');

    wp_deregister_style( 'normalize' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', false, null, 'all');

    wp_deregister_style( 'custom' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', false, null, 'all');

	}

	add_action( 'wp_enqueue_scripts', 'cook_along_podcast_enqueue_scripts' );
endif;

/* Custom Filters and Actions */
function jqmeter() {
	wp_enqueue_script( 'jqmeter', get_template_directory_uri() . '/js/jqmeter.min.js', false, null, true);
}
add_action ('wp_enqueue_scripts', 'jqmeter');

// Removal of auto-generated <p> tags
remove_filter( 'the_excerpt', 'wpautop' );
//remove_filter( 'the_content', 'wpautop' );

// Addition of custom image size for layout
add_image_size( 'medium-square', 350, 350, array( 'center', 'center' ) );
add_image_size( 'thumbs-search', 100, 100, true );
add_image_size( 'blog-thumbs', 600, 350, true );
add_image_size( 'blog-header', 1280, 600, true );

// Custom Taxonomy Registration
function cptui_register_my_taxes_recipe_categories() {

	/**
	 * Taxonomy: Recipe Categories.
	 */

	$labels = array(
		"name" => __( "Recipe Categories", "cookalong_podcast" ),
		"singular_name" => __( "Recipe Category", "cookalong_podcast" ),
		"menu_name" => __( "Recipe Categories", "cookalong_podcast" ),
		"all_items" => __( "All Recipe Categories", "cookalong_podcast" ),
		"edit_item" => __( "Edit Recipe Categories", "cookalong_podcast" ),
		"view_item" => __( "View Recipe Categories", "cookalong_podcast" ),
	);

	$args = array(
		"label" => __( "Recipe Categories", "cookalong_podcast" ),
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,
		"label" => "Recipe Categories",
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'recipes', 'with_front' => true,  'hierarchical' => true, ),
		"show_admin_column" => false,
		"show_in_rest" => false,
		"rest_base" => "recipe_categories",
		"show_in_quick_edit" => false,
	);
	register_taxonomy( "recipe_categories", array( "recipe" ), $args );
}

add_action( 'init', 'cptui_register_my_taxes_recipe_categories' );

// Single.php redirection for Pick Plugins Features
function pif_disable_redirect_canonical($redirect_url) {
	if (is_single()) $redirect_url = false;
	return $redirect_url;
}
add_filter('redirect_canonical','pif_disable_redirect_canonical');

// Comments Section
function wpdiscuz_shortcode() {
	if(file_exists(ABSPATH . 'wp-content/plugins/wpdiscuz/templates/comment/comment-form.php')){
		include_once ABSPATH . 'wp-content/plugins/wpdiscuz/templates/comment/comment-form.php';
	}
}
add_shortcode( 'wpdiscuz_comments', 'wpdiscuz_shortcode' );

require_once "inc/blocks/wp_blocks.php";
require_once "inc/bootstrap/wp_bootstrap_navwalker.php";
require_once "inc/bootstrap/wp_bootstrap_pagination.php";
