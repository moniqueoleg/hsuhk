<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

require_once get_template_directory() . '/fadeblock-widget.php';


if ( ! function_exists( 'hsuhk_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function hsuhk_setup() {
		
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'hsuhk' ),
				'footer'  => esc_html__( 'Secondary menu', 'hsuhk' ),
			)
		);		
	}
}

function quickchic_widgets_init() {
	register_sidebar(array(
	'name' => __( 'Sidebar 1', 'quickchic' ),
	'id' => 'sidebar-1',
	));
	register_sidebar(array(
		'name' => "About Sidebar",
		'id' => 'about-sidebar',
	));
	register_sidebar(array(
		'name' => "Teaching & Learning Sidebar",
		'id' => 'teaching-learning-sidebar',
	));
	register_sidebar(array(
		'name' => "Research Sidebar",
		'id' => 'research-sidebar',
	));
	register_sidebar(array(
		'name' => "News & Events Sidebar",
		'id' => 'news-events-sidebar',
	));
	register_sidebar(array(
		'name' => "Admission Sidebar",
		'id' => 'admission-sidebar',
	));
	register_sidebar(array(
		'name' => "MSc-GSCM Sidebar",
		'id' => 'msc-gscm-sidebar',
	));
	register_sidebar(array(
		'name' => "BBA-SCM Sidebar",
		'id' => 'bba-scm-sidebar',
	));
	register_sidebar(array(
		'name' => "BMSIM Sidebar",
		'id' => 'bmsim-sidebar',
	));
}
add_action( 'init', 'quickchic_widgets_init' );


add_action( 'after_setup_theme', 'hsuhk_setup' );




/**
 */
function hsuhk_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	if ( $is_IE ) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
	} else {
		// If not IE, use the standard stylesheet.
		wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	}


	// Print styles.
	wp_enqueue_style( 'hsuhk-bootstrap-style', get_template_directory_uri() . 'static/bootstrap/css/bootstrap.min.css', array(), wp_get_theme()->get( 'Version' ), 'boostrap' );

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Register the IE11 polyfill file.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills-asset',
		get_template_directory_uri() . '/assets/js/polyfills.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Register the IE11 polyfill loader.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills',
		null,
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_add_inline_script(
		'twenty-twenty-one-ie11-polyfills',
		wp_get_script_polyfill(
			$wp_scripts,
			array(
				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'twenty-twenty-one-ie11-polyfills-asset',
			)
		)
	);

	// Main navigation scripts.
	if ( has_nav_menu( 'primary' ) ) {
		wp_enqueue_script(
			'twenty-twenty-one-primary-navigation-script',
			get_template_directory_uri() . '/assets/js/primary-navigation.js',
			array( 'twenty-twenty-one-ie11-polyfills' ),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}

	// Responsive embeds script.
	wp_enqueue_script(
		'twenty-twenty-one-responsive-embeds-script',
		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
		array( 'twenty-twenty-one-ie11-polyfills' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}

add_action( 'wp_enqueue_scripts', 'hsuhk_scripts' );

function redirect_to_language_url() {
    // Check if a language parameter is present in the URL
    if ( isset( $_GET['lang'] ) ) {
        $language = sanitize_text_field( $_GET['lang'] );
        
        // Modify the URL based on the selected language
        $current_url = home_url( add_query_arg( null, null ) );
        $redirect_url = str_replace( home_url(), home_url( $language ), $current_url );
        
        // Redirect the user to the modified URL
        wp_redirect( $redirect_url, 301 );
        exit;
    }
}
add_action( 'template_redirect', 'redirect_to_language_url' );


function add_categories_to_pages() {
    register_taxonomy_for_object_type('category', 'page');
}

add_action('init', 'add_categories_to_pages');

if ( ! is_admin() ) {
    add_action( 'pre_get_posts', 'category_and_tag_archives' );

}

function category_and_tag_archives( $wp_query ) {

 $my_post_array = array('post','page');

 if ( $wp_query->get( 'category_name' ) || $wp_query->get( 'cat' ) )
    $wp_query->set( 'post_type', $my_post_array );

 if ( $wp_query->get( 'tag' ) )
    $wp_query->set( 'post_type', $my_post_array );
}


// Faculty Post Type

function faculty_post_type() {
	register_post_type('faculty_staff',
		array(
			'rewrite' => array('slug' => 'faculty_staff'),
			'labels' => array(
				'name' => 'Faculty Staffs',
				'singular_name' => 'Faculty Staff',
				'add_new_item' => 'Add New Staff',
				'edit_item' => 'Edit Staff'
			),
			'menu-icon' => 'dashicons-buddicons-buddypress-logo',
			'public' => true,
			'has_archive' => true,
			'show_in_rest' => true,
			'supports' => array(
				'title', 'thumbnail'
			),
			'taxonomies'    => array( 'category' ), // Add this line
		)
	);
}

add_action('init', 'faculty_post_type');


function register_hsuhk_widgets() {
	register_widget( 'FadeBlock_Widget' );
}
// Register Foo_Widget widget
add_action( 'widgets_init', 'register_hsuhk_widgets' );


function enqueue_script_for_widget_display( $instance, $widget, $args ) {
    if ( $widget instanceof FadeBlock_Widget ) {
        //wp_enqueue_script( 'your-script-handle' );
    }
}
add_filter( 'widget_display_callback', 'enqueue_script_for_widget_display', 10, 3 );

