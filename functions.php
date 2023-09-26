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
		
		// register_nav_menus(
		// 	array(
		// 		'primary' => esc_html__( 'Primary menu', 'hsuhk' ),
		// 		'footer'  => esc_html__( 'Secondary menu', 'hsuhk' ),
		// 	)
		// );		
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'hsuhk' ),
				'footer'  => esc_html__( 'Secondary menu', 'hsuhk' ),
			)
		);		
	}
}
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
