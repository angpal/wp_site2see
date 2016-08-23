<?php if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else { ?>

<?php get_header(); ?>

<!-- slider -->
<?php if(is_front_page()) { ?>

<div id="slider_container">

	

		<div class="twelve columns hero-banner">
	
			<div class="hero-content">
			<h1>Call to action</h1>
			<p>blah blah blah get a website from Angelo!</p>
			<a href="#" class="call-to-action-btn">Click me</a>
			</div>

		</div>

</div>

<?php } ?> <!-- slider end -->


		<!--boxes-->
		<div id="box_container">
		
	<div class="row">		
				
		<?php get_template_part( 'element-boxes', 'index' ); ?>
		
</div><!--row end-->			
		
		</div><!--box-container end-->
			
			<div class="clear"></div>
			

<?php get_footer(); ?>

<?php } ?>