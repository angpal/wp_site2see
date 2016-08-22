<?php
/**
 * Terminal Lite Theme Customizer
 *
 * @package Terminal Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function terminal_lite_customize_register( $wp_customize ) {
	
function terminal_lite_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		
	$wp_customize->add_setting('color_scheme', array(
		'default' => '#ff8b38',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => __('Color Scheme','terminal-lite'),
			'description'	=> __('<strong>Select default color.</strong>','terminal-lite'),
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);

	// Slider Section Start		
	$wp_customize->add_section(
        'slider_section',
        array(
            'title' => __('Slider Settings', 'terminal-lite'),
            'priority' => null,
			'description'	=> __('Recommended image size (1420x567)','terminal-lite'),	
        )
    );
	
	$wp_customize->add_setting('page-setting7',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting7',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide one:','terminal-lite'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting8',array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting8',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide two:','terminal-lite'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting9',array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting9',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide three:','terminal-lite'),
			'section'	=> 'slider_section'
	));	
	
	
	$wp_customize->add_setting('hide_slider',array(
			'default' => true,
			'sanitize_callback' => 'terminal_lite_sanitize_checkbox',
			'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'hide_slider', array(
		   'settings' => 'hide_slider',
    	   'section'   => 'slider_section',
    	   'label'     => __('Check this to hide slider','terminal-lite'),
    	   'type'      => 'checkbox'
     ));
	 
	 $wp_customize->add_setting('slidelink_text',array(
	 		'default'	=> __('Download','terminal-lite'),
			'sanitize_callback'	=> 'sanitize_text_field'
	 ));
	 
	 $wp_customize->add_control('slidelink_text',array(
	 		'settings'	=> 'slidelink_text',
			'section'	=> 'slider_section',
			'label'		=> __('Add text for slide link button','terminal-lite'),
			'type'		=> 'text'
	 ));	
	
	// Slider Section End
	
	
}
add_action( 'customize_register', 'terminal_lite_customize_register' );	

function terminal_lite_css(){
		?>
        <style>
				a,
				a:hover, 
				.tm_client strong,
				.postmeta a:hover,
				#sidebar ul li a:hover,
				.blog-post h3.entry-title,
				.woocommerce ul.products li.product .price,
				.main-nav ul li a:hover{
					color:<?php echo esc_html(get_theme_mod('color_scheme','#ff8b38')); ?>;
				}
				a.blog-more:hover,
				.nav-links .current, 
				.nav-links a:hover,
				#commentform input#submit,
				input.search-submit,
				.nivo-controlNav a.active,
				.top-right .social-icons a:hover,
				.blog-date .date{
					background-color:<?php echo esc_html(get_theme_mod('color_scheme','#ff8b38')); ?>;
				}
		</style>
	<?php }
add_action('wp_head','terminal_lite_css');

function terminal_lite_custom_customize_enqueue() {
	wp_enqueue_script( 'terminal-lite-custom-customize', get_template_directory_uri() . '/js/custom.customize.js', array( 'jquery', 'customize-controls' ), false, true );
	wp_localize_script( 'terminal-lite-custom-customize', 'terminaljsvar', array(
	'upgrade' => __('Upgrade to PRO Version', 'terminal-lite')
	));
}
add_action( 'customize_controls_enqueue_scripts', 'terminal_lite_custom_customize_enqueue' );