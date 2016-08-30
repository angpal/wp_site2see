	<!--footer-->
	<div class="clear"></div>
		
		<div id="footer">
		
	
	<!--footer container--><div class="row">	
		
		<div class="large-12 columns" id="footer-widget">
			
			<?php
			/* A sidebar in the footer? Yep. You can can customize
			 * your footer with four columns of widgets.
			 */
			get_sidebar( 'footer' );
			?>
			
			</div><!--footer widget end-->
		
		</div><!-- row end-->		
		
		</div><!-- footer end-->				
		
	<div class="clear"></div>
	
	<div id="footer-info">		
			
				<!--footer container-->
		<div class="row">
				
			<div class="large-12 columns">
			
				<div id="copyright"><?php _e( 'Copyright', 'craft' ); ?> <?php echo date( 'Y' ); ?> <?php echo esc_html(of_get_option('footer_cr')); ?>
					<!-- | <?php _e( 'Powered by', 'craft' ); ?> <a href="http://www.wordpress.org"><?php _e( 'WordPress', 'craft' ); ?></a> --><?php _e( '.... Designed and Developed by:', 'craft' ); ?> <a href="http://www.site2see.com.au"><?php _e( ' www.site2see.com.au', 'craft' ); ?></a></div>
					
			</div><!--footer info end-->		
		</div><!-- footer container2-->				
			
	</div>
</div></div> <!--  wrapper end-->	
	<?php wp_footer(); ?>

</body>

</html>