<?php
/**
 * understrap Theme Customizer
 *
 * @package understrap
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function integral_customize_register( $wp_customize ) {
	$wp_customize->get_section('title_tagline')->priority = 100;
    $wp_customize->remove_section( 'header_image' );
    $wp_customize->remove_section( 'background_image' );
    $wp_customize->remove_section( 'colors' );

}
add_action( 'customize_register', 'integral_customize_register' );

function integral_theme_customize_register( $wp_customize ) {
    
    // Custom Logo //
    $wp_customize->add_setting( 'integral_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	) );
    
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'integral_logo', array(
		'label'    => __( 'Logo', 'integral' ),
		'section'  => 'title_tagline',
		'settings' => 'integral_logo',
        'description' => __( 'Upload a logo to replace the default site name and description in the header. Recommended size of 250px in width by 40px in height. However, if you upload a larger logo the header will adjust.', 'integral' ),
	) ) );
    
    // Default Header //
    $wp_customize->add_section( 'integral_default_header_section' , array(
            'title'       => __( 'Homepage Default Header', 'integral' ),
            'priority'    => 120,
            'description' => 'This section controls the default header on the homepage when the One-page Layout has not been configured. For instructions on how to setup your home page go to APPEARANCE > Getting Started with Integral.',
	) );
    
	$wp_customize->add_setting( 'default_header_background', array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => get_template_directory_uri() . '/images/bg-welcome.jpg'
	) );
    
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'default_header_background', array(
            'label'    => __( 'Background Image', 'integral' ),
            'section'  => 'integral_default_header_section',
            'settings' => 'default_header_background',
	) ) );
    
    $wp_customize->add_setting( 'default_header_title1', array(
            'default' => __( 'Elegant', 'integral' ),
            'sanitize_callback' => 'integral_sanitize_text'
    ) );
    
	$wp_customize->add_control( 'default_header_title1', array(
            'label'    => __( 'Title Line 1', 'integral' ),
            'type'      => 'text',
            'section'  => 'integral_default_header_section',
            'settings' => 'default_header_title1',
	) );
    
    $wp_customize->add_setting( 'default_header_title2', array(
            'default' => __( 'Business Theme', 'integral' ),
            'sanitize_callback' => 'integral_sanitize_text'
    ) );
    
	$wp_customize->add_control( 'default_header_title2', array(
            'label'    => __( 'Title Line 2', 'integral' ),
            'type'      => 'text',
            'section'  => 'integral_default_header_section',
            'settings' => 'default_header_title2',
	) );
    
    $wp_customize->add_setting( 'default_header_tagline', array(
            'default' => __( 'A one page theme for professionals, agencies and businesses.<br />Create a stunning website in minutes.', 'integral' ),
            'sanitize_callback' => 'integral_sanitize_text'
    ) );
    
	$wp_customize->add_control( 'default_header_tagline', array(
            'label'    => __( 'Title Line 1', 'integral' ),
            'type'      => 'textarea',
            'section'  => 'integral_default_header_section',
            'settings' => 'default_header_tagline',
	) );
    
    $wp_customize->add_setting( 'default_header_btn1', array(
            'default' => __( 'View Features', 'integral' ),
            'sanitize_callback' => 'integral_sanitize_text'
    ) );
    
	$wp_customize->add_control( 'default_header_btn1', array(
            'label'    => __( 'Button 1 Text', 'integral' ),
            'type'      => 'text',
            'section'  => 'integral_default_header_section',
            'settings' => 'default_header_btn1',
	) );
    
    $wp_customize->add_setting( 'default_header_btn1url', array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => '#',
    ) );
    
	$wp_customize->add_control( 'default_header_btn1url', array(
            'label'    => __( 'Button 1 Link', 'integral' ),
            'type'      => 'text',
            'section'  => 'integral_default_header_section',
            'settings' => 'default_header_btn1url',
	) );
    
    $wp_customize->add_setting( 'default_header_btn2', array(
            'default' => __( 'Download Now', 'integral' ),
            'sanitize_callback' => 'integral_sanitize_text'
    ) );
    
	$wp_customize->add_control( 'default_header_btn2', array(
            'label'    => __( 'Button 2 Text', 'integral' ),
            'type'      => 'text',
            'section'  => 'integral_default_header_section',
            'settings' => 'default_header_btn2',
	) );
    
    $wp_customize->add_setting( 'default_header_btn2url', array(
            'sanitize_callback' => 'esc_url_raw',
            'default' => '#',
    ) );
    
	$wp_customize->add_control( 'default_header_btn2url', array(
            'label'    => __( 'Button 2 Link', 'integral' ),
            'type'      => 'text',
            'section'  => 'integral_default_header_section',
            'settings' => 'default_header_btn2url',
	) );

}
add_action( 'customize_register', 'integral_theme_customize_register' );


/**
 * Output the styles from the customizer
 */
function integral_customizer_css() {
    ?>
    <style type="text/css">
        .hero.default {background: url(<?php echo get_theme_mod( 'default_header_background', get_template_directory_uri() . '/images/bg-welcome.jpg' ); ?>) no-repeat center top; background-size: cover;}
    </style>
    <?php
}
add_action( 'wp_head', 'integral_customizer_css' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function integral_customize_preview_js() {
	wp_enqueue_script( 'integral_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'integral_customize_preview_js' );
