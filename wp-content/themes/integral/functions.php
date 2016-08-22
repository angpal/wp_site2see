<?php 
/**
 * Integral functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @package WordPress
 * @subpackage Integral
 * @since keepwriting 1.0
 */

/** Register Redux Options **/  
require get_template_directory() . '/options.php';
global $integral;


/** Default content width **/ 
if ( ! isset( $content_width ) ) {
  $content_width = 900;
}

/** Initial Setup **/
function integral_setup() {
	
    // This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'integral-post-thumbnails', 750, 9999);
    add_image_size( 'integral-home-post-thumbnails', 720, 360, true);
    
    // Add default posts and comments RSS feed links to head. 
    add_theme_support( 'automatic-feed-links' );
    
    // Let WordPress manage the document title. By adding theme support, we declare that this theme does not use a hard-coded <title> tag in the document head, and expect WordPress to provide it for us.
    add_theme_support("title-tag");
    
    // WooCommerce support
	add_theme_support( 'woocommerce' );
    
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'      => esc_html__( 'Primary Menu', 'integral' ),
	) );
    
    // Make theme available for translation. Translations can be filed in the /languages/ directory. If you're building a theme based on OnePress, use a find and replace to change 'onepress' to the name of your theme in all the template files.
    load_theme_textdomain( 'integral', get_template_directory() . '/languages' );
    
}
add_action( 'after_setup_theme', 'integral_setup' );

/** Wider Customizer Panel **/
add_action( 'customize_controls_enqueue_scripts', 'integral_customizer_style');
function integral_customizer_style() {
    wp_add_inline_style( 'customize-controls', '.wp-full-overlay-sidebar { width: 350px } .wp-full-overlay.expanded { margin-left: 350px } ');
}

/** Include the TGM Plugin Activation class **/
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'integral_register_required_plugins' );

function integral_register_required_plugins() {

    $plugins = array(

        array(
            'name'      => __( 'Redux Framework', 'integral' ),
            'slug'      => 'redux-framework',
            'recommended'  => true,
        ),
        array(
            'name'      => __( 'Contact Form 7', 'integral' ),
            'slug'      => 'contact-form-7',
            'recommended'  => true,
        ),

    );
    

     $config = array(
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true,                    // Automatically activate plugins after installation or not.
        'message'      => '',     
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'integral' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'integral' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'integral' ), 
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'integral' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'integral' ),
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'integral' ),
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'integral' ),
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'integral' ),
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'integral' ),
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'integral' ), 
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'integral' ), 
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'integral' ), 
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'integral' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'integral' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'integral' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'integral' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'integral' ), 
            'nag_type'                        => 'updated'
        )
    );

    tgmpa( $plugins, $config );
    
    /** Load welcome screen **/
    require get_template_directory() . '/inc/welcome/theme-welcome.php';
}


/** Load Bootstrap Nav Walker. **/
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';


/** Load Scripts & CSS Files **/
function integral_scripts() {  
		wp_enqueue_style( 'integral_bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css');
        wp_enqueue_style( 'integral_multicolumnsrow_css', get_template_directory_uri().'/css/multi-columns-row.css');
		wp_enqueue_style( 'integral_flexslider_css', get_template_directory_uri().'/css/flexslider.css');
        wp_enqueue_style( 'integral_prettyphoto_css', get_template_directory_uri().'/css/prettyPhoto.css');
        wp_enqueue_style( 'integral_basestylesheet', get_stylesheet_uri() );
		wp_enqueue_style( 'integral_fontawesome_css', get_template_directory_uri().'/css/font-awesome.min.css');
		wp_enqueue_style( 'integral_googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,700,700italic,600italic,400italic|Cabin:400,500,600,700|Montserrat:400,700');
        wp_enqueue_script('integral_parallax_js', get_template_directory_uri().'/js/parallax.js',0,0,true);
        wp_enqueue_script('integral_bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js',0,0,true);
        wp_enqueue_script('integral_prettyphoto_js', get_template_directory_uri().'/js/jquery.prettyPhoto.js',0,0,true);
        wp_enqueue_script('integral_flexslider_js', get_template_directory_uri().'/js/flexslider.js',0,0,true);
        wp_enqueue_script('integral_smoothscroll_js', get_template_directory_uri().'/js/smooth-scroll.js',0,0,true);        
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }  
add_action('wp_enqueue_scripts', 'integral_scripts');


/** Format Comments **/
function integral_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body panel panel-default">
    <?php endif; ?>
    <div class="comment-author vcard panel-heading">
        <?php printf( __( '<strong>%s</strong> <span class="timecomment"> left a comment on', 'integral' ), get_comment_author_link() ); ?>
        <?php printf( __('%1$s at %2$s', 'integral'), get_comment_date(),  get_comment_time(), 'integral' ); ?>
        <?php edit_comment_link( __( '(Edit)', 'integral' ) );?>
        </span>
    </div>
    <div class="panel-body">

    <?php comment_text(); ?>
    </div>

    <div class="reply panel-footer">
    <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        <?php if ( $comment->comment_approved == '0' ) : ?>
        <em class="comment-awaiting-moderation pull-right"><?php _e( 'Your comment is awaiting moderation.', 'integral' ); ?></em>
    <?php endif; ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; 
}

/** Disable Redux Demo Mode **/
function disable_redux_demo() {
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'disable_redux_demo');

/** Remove Redux Menu Under Tools **/
add_action( 'admin_menu', 'remove_redux_menu',12 );
function remove_redux_menu() {
    remove_submenu_page('tools.php','redux-about');
}

/** Customizer **/
require get_template_directory() . '/inc/customizer.php';

/** Format Search Widget **/
add_filter( 'get_search_form' , 'integral_search' , 2 ) ;
function integral_search( $markup ) {
    $markup = str_replace( 'class="search-form"' , 'class="search-form row"' , $markup ) ;
    $markup = str_replace( '<label' , '<i class="fa fa-search""></i> &nbsp;<label' , $markup ) ;
    $markup = str_replace( '<input type="text"' , '<input type="text" class="form-control" placeholder="type and hit enter"' , $markup ) ;
    $markup = preg_replace( '/(<span class="screen-reader-text">.*?>)/' , '' , $markup ) ;
    $markup = preg_replace( '/(<input type="submit".*?>)/' , '<br />' , $markup ) ;
    return $markup;
}

/** Register Sidebars and Custom Widget Areas **/

function integral_widgets_init() {
    
    global $integral;

    register_sidebar( array(
      'name' => __( 'Right Sidebar', 'integral' ),
      'id' => 'rightbar',
      'description' => __( 'Widgets in this area will be shown in the right sidebar.', 'integral' )
    ) );
    
    $features_layout = $integral['features-layout'];

	register_sidebar( array(
		'name' => __( 'Homepage Features Section', 'integral' ),
		'id' => 'feature-widgets',
		'description' => __( 'The FEATURES section which appears on the homepage. Drag and drop widgets titled [Integral - Feature Widget] here to add features.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$features_layout.' col-md-'.$features_layout.' col-lg-'.$features_layout.'"><div class="feature">',
		'after_widget' => '</div></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' =>__( 'Homepage Single Projects Section', 'integral'),
		'id' => 'single-project-widgets',
		'description' => __( 'The PROJECTS SINGLE section which appears on the homepage. Drag and drop widgets titled [Integral - Single Project Widget] here to add projects.', 'integral' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

    $clients_layout = $integral['clients-layout'];

    register_sidebar( array(
		'name' =>__( 'Homepage Clients Section', 'integral'),
		'id' => 'client-widgets',
		'description' => __( 'The CLIENTS section which appears on the homepage. Drag and drop widgets titled [Integral - Client Widget] here to add clients.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$clients_layout.' col-md-'.$clients_layout.' col-lg-'.$clients_layout.'">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
    
    register_sidebar( array(
		'name' =>__( 'Homepage Testimonials Section', 'integral'),
		'id' => 'testimonial-widgets',
		'description' => __( 'The TESTIMONIALS section which appears on the homepage. Drag and drop widgets titled [Integral - Testimonial Widget]  here to add testimonials.', 'integral' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<small>',
		'after_title' => '</small>',
	) );
    
    $services_layout = $integral['services-layout'];
    
    register_sidebar( array(
		'name' =>__( 'Homepage Services Section', 'integral'),
		'id' => 'service-widgets',
		'description' => __( 'The SERVICES section which appears on the homepage. Drag and drop widgets titled [Integral - Service Widget] here to add services.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$services_layout.' col-md-'.$services_layout.' col-lg-'.$services_layout.' feature">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
    
    $team_layout = $integral['team-layout'];
    
    register_sidebar( array(
		'name' =>__( 'Homepage Team Section', 'integral'),
		'id' => 'team-widgets',
		'description' => __( 'The OUR TEAM section which appears on the homepage. Drag and drop widgets titled [Integral - Team Member Widget] here to add team members.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$team_layout.' col-md-'.$team_layout.' col-lg-'.$team_layout.'">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="t-name">',
		'after_title' => '</h3>',
	) );
    
}

add_action( 'widgets_init', 'integral_widgets_init' );

/** Load Custom Widgets File **/
require_once get_template_directory() . '/inc/widgets/custom_widgets.php';


/** Display upgrade notice on customizer page **/
function integral_prefix_upsell_notice() {

	// Enqueue the script
	wp_enqueue_script(
		'prefix-customizer-upsell',
		get_template_directory_uri() . '/js/upsell.js',
		array(), '1.0.0',
		true
	);

	// Localize the script
	wp_localize_script(
		'prefix-customizer-upsell',
		'prefixL10n',
		array(
			'prefixURL'	=> esc_url( 'https://www.themely.com/themes/integral/' ),
			'prefixLabel'	=> __( 'Upgrade to Integral PRO', 'integral' ),
		)
	);

}
add_action( 'customize_controls_enqueue_scripts', 'integral_prefix_upsell_notice' );


/** Custom Excerpts **/
function integral_custom_excerpts($limit) {
    return wp_trim_words(get_the_content(), $limit);
}


/** Display Themely Blog Feed **/
add_action( 'wp_dashboard_setup', 'integral_dashboard_setup_function' );
function integral_dashboard_setup_function() {
    add_meta_box( 'integral_dashboard_widget', 'Themely News & Updates', 'integral_dashboard_widget_function', 'dashboard', 'side', 'high' );
}
function integral_dashboard_widget_function() {
    echo '<div class="rss-widget">';
     wp_widget_rss_output(array(
          'url' => esc_url( 'https://www.themely.com/feed/' ),
          'title' => 'Themely News & Updates',
          'items' => 3,
          'show_summary' => 1,
          'show_author' => 0,
          'show_date' => 1
     ));
     echo '</div>';
}

?>