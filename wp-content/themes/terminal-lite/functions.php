<?php
/**
 * Terminal Lite functions and definitions
 *
 * @package Terminal Lite
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'terminal_lite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function terminal_lite_setup() {

	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	load_theme_textdomain( 'terminal-lite', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('terminal-lite-homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'terminal-lite' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_editor_style( array( 'editor-style.css', terminal_lite_font_url() ) );
}
endif; // terminal_lite_setup
add_action( 'after_setup_theme', 'terminal_lite_setup' );


function terminal_lite_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'terminal-lite' ),
		'description'   => __( 'Appears on blog page sidebar', 'terminal-lite' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'terminal-lite' ),
		'description'   => __( 'Appears on page sidebar', 'terminal-lite' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
		
}
add_action( 'widgets_init', 'terminal_lite_widgets_init' );

function terminal_lite_font_url(){
		$font_url = '';
		
		/* Translators: If there are any character that are
		* not supported by Raleway, translate this to off, do not
		* translate into your own language.
		*/
		$raleway = _x('on', 'Raleway font:on or off','terminal-lite');
		
		/* Translators: If there are any character that are
		* not supported by Open Sans, translate this to off, do not
		* translate into your own language.
		*/
		$opensans = _x('on', 'Open Sans font:on or off','terminal-lite');
		
		if('off' !== $raleway || 'off' !==  $opensans){
			$font_family = array();
			
			if('off' !== $raleway){
				$font_family[] = 'Raleway:400,700';
			}
			
			if('off' !== $opensans){
				$font_family[] = 'Open Sans:400,700';
			}
			
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			
			$font_url = add_query_arg($query_args,'https://fonts.googleapis.com/css');
		}
		
	return $font_url;
	}

function terminal_lite_scripts() {
	wp_enqueue_style( 'terminal-lite-font', terminal_lite_font_url(), array() );
	wp_enqueue_style( 'terminal-lite-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'terminal-lite-responsive-style', get_template_directory_uri().'/css/theme-responsive.css' );
	wp_enqueue_style( 'nivo-style', get_template_directory_uri().'/css/nivo-slider.css' );
	if ( is_front_page() && !is_home() ) { 
		wp_enqueue_script( 'jquery-nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	}
	wp_enqueue_script( 'terminal-lite-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.css' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'terminal_lite_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


define('terminal_lite_pro_theme_url','https://flythemes.net/wordpress-themes/terminal-wordpress-theme/');
define('terminal_lite_site_url','https://flythemes.net/');