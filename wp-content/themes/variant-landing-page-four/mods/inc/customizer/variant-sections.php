<?php

class VariantLPS {

    static function sections($wp_customize) {
        /**
         * Add panels
         */
        $wp_customize->add_panel('variantlp_options', array(
            //'priority' => 10,
            'title' => __('Variant Theme Options', 'variant-landing-page-four'),
            'capability' => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Allows you to customize some example settings for Variant Theme.', 'variant-landing-page-four'),
        ));


        /**
         * General Section
         */
        $wp_customize->add_section('general_settings', array(
            'title' => __('General Settings', 'variant-landing-page-four'), //Visible title of section
            //'priority' => 35, //Determines what order this appears in
            'panel' => 'variantlp_options',
            'capability' => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Allows you to customize header logo, header text etc settings for Variant Theme.', 'variant-landing-page-four'), //Descriptive tooltip
                )
        );

        /**
         * Lead form section
         */
        $wp_customize->add_section('lead_form_section', array(
            'title' => __('Lead Form Settings', 'variant-landing-page-four'), //Visible title of section
            //'priority' => 35, //Determines what order this appears in
            'panel' => 'variantlp_options',
            'capability' => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Allows you to add lead form for Variant Theme.', 'variant-landing-page-four'), //Descriptive tooltip
                )
        );
        /**
         * Feature Headings section
         */
        $wp_customize->add_section('feature_headings', array(
            'title' => __('Feature Heading And Description', 'variant-landing-page-four'), //Visible title of section
            //'priority' => 35, //Determines what order this appears in
            'panel' => 'variantlp_options',
            'capability' => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Allows you to change feature heading and description for Variant Theme.', 'variant-landing-page-four'), //Descriptive tooltip
                )
        );
        /**
         * Featured Section
         */
        $wp_customize->add_section('featured_items', array(
            'title' => __('Featured Items', 'variant-landing-page-four'), //Visible title of section
            //'priority' => 35, //Determines what order this appears in
            'panel' => 'variantlp_options',
            'capability' => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Allows you to change featured item for Variant Theme.', 'variant-landing-page-four'), //Descriptive tooltip
                )
        );
        /**
         * Blog Section
         */
        $wp_customize->add_section('blog_section', array(
            'title' => __('Blog Section Setting', 'variant-landing-page-four'), //Visible title of section
            //'priority' => 35, //Determines what order this appears in
            'panel' => 'variantlp_options',
            'capability' => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Allows you to change blog section setting for Variant Theme.', 'variant-landing-page-four'), //Descriptive tooltip
                )
        );
        /**
         * Footer Section
         */
        $wp_customize->add_section('footer_setting', array(
            'title' => __('Footer Text Setting', 'variant-landing-page-four'), //Visible title of section
            //'priority' => 35, //Determines what order this appears in
            'panel' => 'variantlp_options',
            'capability' => 'edit_theme_options', //Capability needed to tweak
            'description' => __('Allows you to change footer text for Variant Theme.', 'variant-landing-page-four'), //Descriptive tooltip
                )
        );
    }

}
