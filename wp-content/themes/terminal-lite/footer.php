<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Terminal Lite
 */
?>

	<div class="copyright-wrapper">
        	<div class="inner">
                <div class="copyright">
                    	<p><?php printf(  __( '%1$s %2$s | All Rights Reserved. %3$s', 'terminal-lite' ), get_bloginfo( 'name' ), date_i18n( 'Y' ), __('Powered by WordPress','terminal-lite') ); ?></p>                
                </div><!-- copyright --><div class="clear"></div>         
            </div><!-- inner -->
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>