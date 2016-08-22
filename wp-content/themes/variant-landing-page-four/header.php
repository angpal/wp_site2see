<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?> 
    </head>
    <body <?php body_class(); ?>>      
        <div id="main">
            <!--Header-->
            <header id="header" role="banner">
                <div class="header-overlay"></div>
                <div class="header_wrapper">
                    <div class="top-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
                                    <a class="skip-link screen-reader-text" href="#content_wrapper"><?php _e('Skip to content', 'variant-landing-page-four'); ?></a>
                                    <div class="logo">
                                        <a href="<?php echo esc_url(site_url('/')); ?>">
                                            <?php
                                            $defalult_logo = VARIANTLP_DIR_URI . "assets/imgs/variant-logo.png";
                                            $logo = variantlp_four_get_option('vlp_logo');
                                            if ($logo && $logo != '' && $logo != $defalult_logo) {
                                                $logo_image = variantlp_get_image_link($logo);
                                                if ($logo_image['alt'] == '') {
                                                    $logo_image['alt'] = get_bloginfo('name');
                                                }
                                            } else {
                                                $logo_image = array('alt' => get_bloginfo('name'), 'src' => $defalult_logo);
                                            }
                                            ?>
                                            <img src="<?php echo esc_url($logo_image['src']); ?>"  alt="<?php echo esc_html($logo_image['alt']); ?>" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <!--Menus-->
                                    <div class="menu-wrap">
                                        <menu id="menu" role="navigation">
                                            <?php variantlp_header_nav(); ?>
                                        </menu>
                                    </div>
                                    <!--/Menus-->
                                </div>
                            </div>
                        </div>    
                    </div>
                    <span class="clear"></span>