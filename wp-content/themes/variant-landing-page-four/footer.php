<!--Footer-->
<div id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                /* A sidebar in the footer? Yep. You can can customize
                 * your footer with four columns of widgets.
                 */
                get_sidebar('footer');
                ?>
            </div>
        </div>
    </div>
</div>
<!--/Footer-->
<!--Footer Bottom-->
<div id="footer_bottom" class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="copyright" role="contentinfo">
                    <?php
                    if (variantlp_four_get_option('vlp_footer_text') && variantlp_four_get_option('vlp_footer_text') != '') {
                        echo wp_kses_post(variantlp_four_get_option('vlp_footer_text'));
                    } else {
                        ?>
                        <a rel="nofollow" href="<?php echo esc_url('http://www.inkthemes.com'); ?>"><?php _e('Variant Theme', 'variant-landing-page-four'); ?></a> <?php _e('Powered By', 'variant-landing-page-four'); ?> <a href="<?php echo esc_url('http://www.wordpress.org'); ?>"><?php _e('WordPress', 'variant-landing-page-four'); ?></a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div> 
<!--Footer Bottom-->
</div>     

<?php wp_footer(); ?>

</body>
</html>
