



<?php if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else { ?>

	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
		<?php if ( get_theme_mod('site_favicon') ) : ?>
			<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
		<?php endif; ?>
	<?php endif; ?>

<?php get_header(); ?>

<!-- slider -->
<?php if(is_front_page()) { ?>

<div id="slider_container">

		

			<img src = "http://localhost:8080/wp_site2see/wp-content/uploads/2016/08/banner_1366x902.jpg" class="hero-img">
	
			<div class="hero-content">
				<h1 class="hero-h1">Custom Web Design and Development</h1>
				<p class="hero-p">Site2See specializes in creating unique designs for your personal or business website . As an educated designer and developer, I striving to deliver products that exceed your expectations.</p>
				<a href="#get-a-quote" class="call-to-action-btn">Ask For A Quote</a>
			</div>



</div>

<?php } ?> <!-- slider end -->


<!--boxes-->
	<div id="box_container">

		<div id="feature-boxes">

			<h2 class="services-heading">Specialized Services and Professional Approach</h2>

			<div class="row">
				
				<?php get_template_part( 'element-boxes', 'index' ); ?>
			
			</div><!-- row end -->

		</div><!-- feature-box end -->




		<div id="my-philosophy">
			<div class="my-goals">

				<h2>My Goals</h2>

				<ul>
   					<li>Increase your business inquiries.</li>
   					<li>Make your information easily accessible.</li>
   					<li>Improve your professional image.</li>
   					<li>Provide a great online user experience.</li>
   					<li>Let you focus on your business.</li>
   				</ul>

			</div><!-- my-goals end -->

			<div class="my-offer">

				<h2>What I can do for you</h2>
				
				<ul>
    				<li>Design or redesign your website.</li>
    				<li>Make your website mobile-friendly.</li>
    				<li>Market your website on search engines.</li>
    				<li>Logo design and collaterals.</li>
    			</ul>

    		</div><!-- my-offer end -->

    		<div class="a-better-way">

    			<h2>Three Basic Principles</h2>

    				<div class="way1">
    					<img src = "http://localhost:8080/wp_site2see/wp-content/uploads/2016/08/principle_1_quality.png" class="img-way1">
    					<h3> Quality over Quantity</h3>
    					<p>My aim is not to produce a specific number of websites per month, but rather to produce quality websites, even if that means only producing one or two. Quality and customer satisfaction is what drives me.</p>
    				</div>

    				<div class="way2">
    					<img src = "http://localhost:8080/wp_site2see/wp-content/uploads/2016/08/principle_2_affordable.png" class="img-way2">
    					<h3>Build Affordable Websites</h3>
    					<p>My overheads are low which means I do not have to charge the high prices that some larger businesses do. Of course the more complex the website the high the cost, but I am certain that you will be pleasantly surprised at how competative my prices will be.</p>
    				</div>

    				<div class="way3">
    					<img src = "http://localhost:8080/wp_site2see/wp-content/uploads/2016/08/principle_3_attention.png" class="img-way3">
    					<h3> Focus on Detail, Not Time</h3>
    					<p>I may not be the fastest developer in the market place, but that is not my intention. Quality and attention to detail takes time. My process is thorough.</p>
    				</div>

    		</div><!-- a-better-way end -->

    		<div class="take-action">
    			<a href = "#get-a-quote"><img src = "http://localhost:8080/wp_site2see/wp-content/uploads/2016/08/take-action_379x69.png" class="t-action">
    			</a>
    		</div>
			
		</div><!--- my-philosophy end -->


	<a name="get-a-quote"></a>
		<div id= "contact-us">



			<h2 class="contact-heading-1"> Get a Quote or Send a Message.</h2><br>
			<h3>Great communication begins right here, right now.<br>So tell me what you are thinking. </h3>

			<h4 class="contact-heading-2"> Are you in need of a personal or business website? Just send me a few detail, like the number of pages, the purpose of the website and an idea of the type of content, and I will forward to you an approximate costing. That simple!

			<br><br> If not, I am happy to answer any questions you may have about the Site2See service. Reach out to me and I'll respond as soon as I can. </h4>

			<div class="fscf-box">

				<?php
					if ( isset($si_contact_form) )  {
					 echo $si_contact_form->si_contact_form_short_code( array( 'form' => '1' ) );
					}
				?>

			</div>
		</div><!--- my-philosophy end -->

	</div><!--box-container end -->
			
	<div class="clear"></div>
			

<?php get_footer(); ?>

<?php } ?>