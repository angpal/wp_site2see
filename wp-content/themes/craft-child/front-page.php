<?php if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else { ?>

<?php get_header(); ?>

<!-- slider -->
<?php if(is_front_page()) { ?>

<div id="slider_container">

		<div class="twelve columns hero-banner">
	
			<div class="hero-content">
			<h1 class="hero-h1">Custom Web Design and Development</h1>
			<p class="hero-p">Site2See specializes in creating unique designs for your personal or business website . As an educated designer and developer, I striving to deliver products that exceed your expectations.</p>
			<a href="#" class="call-to-action-btn">Ask For A Quote</a>
			</div>

		</div>

</div>

<?php } ?> <!-- slider end -->


<!--boxes-->
	<div id="box_container">

		<div id="feature-boxes">

			<div class="row">
				
				<?php get_template_part( 'element-boxes', 'index' ); ?>
			
			</div><!-- row end -->
		</div><!-- feature-box end-->

		<div id="my-promise">
			<div class="my-goals">

				<h2>My Goals</h2>

				<ul>
   					<li>Increase your business inquiries.</li>
   					<li>Make your information easily accessible.</li>
   					<li>Improve your professional image.</li>
   					<li>Provide a great online user experience.</li>
   					<li>Let you focus on your business.</li>
   				</ul>

			</div><!-- my-goals end-->

			<div class="my-offer">

				<h2>What I can do for you</h2>
				
				<ul>
    				<li>Design or redesign your website.</li>
    				<li>Make your website mobile-friendly.</li>
    				<li>Market your website on search engines.</li>
    				<li>Logo design and collaterals.</li>
    			</ul>

			</div><!-- my-offer end-->
		</div><!-- my-promise end-->
	</div>	


	</div><!--box-container end-->
			
	<div class="clear"></div>
			

<?php get_footer(); ?>

<?php } ?>