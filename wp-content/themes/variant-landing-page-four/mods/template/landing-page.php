<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Inkthemes
 * @subpackage landing_page_theme
 * @since Landing page theme 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="page_container template_five" role="main">
            <div class="header_wrapper"> 
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">     
                            <div class="row">
                                <div class="header">
                                    <div class="col-md-6">
                                        <div class="logo ">
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
                                    <div class="col-md-6">    
                                        <div class="contact_detail"> 
                                            <p class="font_icon"><i class="fa-phone fa" aria-hidden="true"></i></p>
                                            <span class="c-number"><a href="tel:<?php echo wp_kses_post(variantlp_four_get_option('vlp_contact_number', __('885-5441-122', 'variant-landing-page-four'))); ?>" ><?php echo wp_kses_post(variantlp_four_get_option('vlp_contact_number', __('885-5441-122', 'variant-landing-page-four'))); ?></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="top_feature_container">
                <div class="top-bg"></div>
                <div class="top_feature_container_wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12"> 
                                <div class="top_feature_content">
                                    <h1><?php echo wp_kses_post(variantlp_four_get_option('vlp_top_heading', __('Every day a different journey', 'variant-landing-page-four'))); ?></h1>
                                    <p><?php echo wp_kses_post(variantlp_four_get_option('vlp_top_description', __("With our Theme Setup service we'll manually install WordPress, your Organic Theme", 'variant-landing-page-four'))); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="template_feature_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="template_form_content">
                                <?php
                                $form_link = esc_url(variantlp_four_get_option('vlp_lead_form'));
                                if ($form_link) {
                                    ?>
                                    <div class="form_wrapper_custom form_iframe">
                                        <?php
                                        //$height = variantlp_four_get_option('vlp_form_height', '482');
                                        echo variantlp_lead_form($form_link);
                                        ?>
                                    </div>
                                <?php } else {
                                    ?>
                                    <div class="form_wrapper_custom image form_iframe">
                                        <?php echo '<a class="fg-placeholder" href="http://www.formget.com/app/" target="new"><img src="' . VARIANTLP_DIR_URI . 'assets/imgs/fg-placeholder.png" alt="Formget Placeholder" /></a>'; ?></div>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
            <div class="template_feature_container"> 
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row custom-row">
                                <h2 class="vlp_feature_heading"><?php echo wp_kses_post(variantlp_four_get_option('vlp_feature_heading', 'Liittle But Useful Tricks To Viral Marketing')); ?></h2>
                                <div class="line_separator"></div>
                                <p class="vlp_feature_description"><?php echo wp_kses_post(variantlp_four_get_option('vlp_feature_description', 'Maria Patte and the staff at the Hilton were very helpful. When we first booked, there were some<br/> changes in their food options as well as a room mix-up that worked in our favor.')); ?></p>
                                <div class="feature_box">
                                    <?php
                                    $featured_items = wp_kses_post(variantlp_four_get_option('vlp_featured_items'));
                                    $feature_dummy_content = array(
                                        array(
                                            'vlp_fa_image' => VARIANTLP_DIR_URI . 'assets/imgs/img_thumb1.jpg',
                                            'vlp_fa_description' => __('Variant is completely responsive and looks cool across all devices.', 'variant-landing-page-four'),
                                        ),
                                        array(
                                            'vlp_fa_image' => VARIANTLP_DIR_URI . 'assets/imgs/img_thumb2.jpg',
                                            'vlp_fa_description' => __('Collect leads instantly and start selling your services.', 'variant-landing-page-four'),
                                        ),
                                        array(
                                            'vlp_fa_image' => VARIANTLP_DIR_URI . 'assets/imgs/img_thumb3.jpg',
                                            'vlp_fa_description' => __('Create any kind of Form via FormGet and use it on Landing Page.', 'variant-landing-page-four'),
                                        ),
                                        array(
                                            'vlp_fa_image' => VARIANTLP_DIR_URI . 'assets/imgs/img_thumb4.jpg',
                                            'vlp_fa_description' => __('Create any kind of Form via FormGet and use it on Landing Page.', 'variant-landing-page-four'),
                                        ),
                                    );
                                    $featured_items = $feature_dummy_content;
                                    if (!empty($featured_items)) {
                                        foreach ($featured_items as $key => $value) {
                                            $id = ($key + 1);
                                            ?>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="feature_box_item item<?php echo $id; ?>">
                                                    <?php
                                                    $feature_box = variantlp_four_get_option('vlp_fa_image' . ($key + 1));
                                                    if ($feature_box && $feature_box != '' && $feature_box != $value['vlp_fa_image']) {
                                                        $image = variantlp_get_image_link(variantlp_four_get_option('vlp_fa_image' . ($key + 1)));
                                                        $image_link = esc_url($image['src']);
                                                        $image_alt = esc_html($image['alt']);
                                                    } else {
                                                        $image_link = esc_url($value['vlp_fa_image']);
                                                        $image_alt = '';
                                                    }
                                                    ?>
                                                    <img class="vlp_fa_image<?php echo $id; ?>" src="<?php echo $image_link; ?>"  alt="<?php echo ($image_alt == '') ? sprintf(__('Feature Image %s', 'variant-landing-page-four'), ($key + 1)) : $image_alt; ?>" />
                                                    <p id="<?php echo esc_attr('vlp_fa_description' . ($key + 1)); ?>"><?php echo esc_html(variantlp_four_get_option('vlp_fa_description' . ($key + 1), $value['vlp_fa_description'])); ?></p>

                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>     
            <div class="blog-heading-wrapper">
                <div class="container">	
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="blog-section-heading"><?php
                                if (variantlp_four_get_option('vlp_blog_heading_text') && variantlp_four_get_option('vlp_blog_heading_text') != '') {
                                    echo wp_kses_post(variantlp_four_get_option('vlp_blog_heading_text'));
                                } else {
                                    _e('Recent Posts', 'variant-landing-page-four');
                                }
                                ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--Content Wrapper-->
            <div id="content_wrapper" class="content single">
                <div class="container">	
                    <div class="row"> 
                        <div class="col-md-8">
                            <!--Blog-->
                            <div class="blog content_bar" role="main">
                                <div class="blog-content">
                                    <?php
                                    $limit = get_option('posts_per_page');
                                    if (get_query_var('paged')) {
                                        $paged = get_query_var('paged');
                                    } elseif (get_query_var('page')) {
                                        $paged = get_query_var('page');
                                    } else {
                                        $paged = 1;
                                    }
                                    $args = array(
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'posts_per_page' => $limit,
                                        'paged' => $paged
                                    );
                                    $BlogQuery = new WP_Query($args);
                                    if ($BlogQuery->have_posts()): while ($BlogQuery->have_posts()): $BlogQuery->the_post();
                                            get_template_part('content');
                                        endwhile;
                                    endif;
                                    ?>
                                </div>
                                <?php
                                variantlp_pagination($BlogQuery->max_num_pages);
                                wp_reset_postdata();
                                ?>
                            </div>
                            <!--/Blog-->
                        </div>
                        <div class="col-md-4">
                            <div id="sidebar" class="sidebar side-blog">
                                <?php get_sidebar(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Content Wrapper-->
            <div class="footer_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer_content" role="contentinfo">
                                <p class="footer-text"><?php
                                    if (variantlp_four_get_option('vlp_footer_text') && variantlp_four_get_option('vlp_footer_text') != '') {
                                        echo wp_kses_post(variantlp_four_get_option('vlp_footer_text'));
                                    } else {
                                        ?>
                                        <a rel="nofollow" href="<?php echo esc_url('http://www.inkthemes.com'); ?>"><?php _e('Variant Theme', 'variant-landing-page-four'); ?></a> <?php _e('Powered By', 'variant-landing-page-four'); ?> <a href="<?php echo esc_url('http://www.wordpress.org'); ?>"><?php _e('WordPress', 'variant-landing-page-four'); ?></a>
                                        <?php
                                    }
                                    ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>