<?php
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function variantlp_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __('Primary Widget Area', 'variant-landing-page-four'),
		'id' => 'primary-widget-area',
		'description' => __('The primary widget area', 'variant-landing-page-four' ),
		'before_widget' => '<div class="sidebar-page">',
		'after_widget' => '</div>',
		'before_title' => '<span class="sidebar-title">',
		'after_title' => '</span>',
	) );

// Area 2, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => __('First Footer Widget Area', 'variant-landing-page-four'),
        'id' => 'first-footer-widget-area',
        'description' => __('The first footer widget area', 'variant-landing-page-four'),
        'before_widget' => '<div class="sidebar-page">',
		'after_widget' => '</div>',
		'before_title' => '<span class="sidebar-title">',
		'after_title' => '</span>',
    ));
    // Area 3, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => __('Second Footer Widget Area', 'variant-landing-page-four'),
        'id' => 'second-footer-widget-area',
        'description' => __('The second footer widget area', 'variant-landing-page-four'),
        'before_widget' => '<div class="sidebar-page">',
		'after_widget' => '</div>',
		'before_title' => '<span class="sidebar-title">',
		'after_title' => '</span>',
    ));
    // Area 4, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => __('Third Footer Widget Area', 'variant-landing-page-four'),
        'id' => 'third-footer-widget-area',
        'description' => __('The third footer widget area', 'variant-landing-page-four'),
        'before_widget' => '<div class="sidebar-page">',
		'after_widget' => '</div>',
		'before_title' => '<span class="sidebar-title">',
		'after_title' => '</span>',
    ));
	// Area 5, located in the footer. Empty by default.
    register_sidebar(array(
        'name' => __('Fourth Footer Widget Area', 'variant-landing-page-four'),
        'id' => 'fourth-footer-widget-area',
        'description' => __('The fourth footer widget area', 'variant-landing-page-four'),
        'before_widget' => '<div class="sidebar-page">',
		'after_widget' => '</div>',
		'before_title' => '<span class="sidebar-title">',
		'after_title' => '</span>',
    ));
}
add_action( 'widgets_init', 'variantlp_widgets_init' );