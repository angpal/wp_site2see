<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Terminal Lite
 */
?>
<?php if( function_exists('is_woocommerce') && is_woocommerce() ) { ?>
		</div>
<?php } ?>
<div id="sidebar">
    
    <?php if ( dynamic_sidebar( 'sidebar-2' ) ) : ?>
        <?php
			dynamic_sidebar( 'sidebar-2' );
		 ?>
    <?php endif; // end sidebar widget area ?>
	
</div><!-- sidebar -->

<?php if( function_exists('is_woocommerce') && is_woocommerce() ) { ?>
		</div>
	</div>
    <div class="clear"></div>
<?php } ?>
