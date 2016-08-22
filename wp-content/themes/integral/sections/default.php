<?php
/**
 * Hero Section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<section id="welcome" class="hero default">
<div class="blacklayer"></div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
            <h1><?php echo get_theme_mod( 'default_header_title1', 'Elegant' ); ?></h1>
            <h2><?php echo get_theme_mod( 'default_header_title2', 'Business Theme' ); ?></h2>
            <div class="lead text-center">
                <p><?php echo get_theme_mod( 'default_header_tagline', 'A one page theme for professionals, agencies and businesses.<br />Create a stunning website in minutes.' ); ?></p>
            </div>
            <div class="col-md-6 text-right">
                <a href="<?php echo get_theme_mod( 'default_header_btn1url', '#' ); ?>" class="btn btn-md btn-ot"><?php echo get_theme_mod( 'default_header_btn1', 'View Features' ); ?></a>
			</div>
            <div class="col-md-6 text-left">
                <a href="<?php echo get_theme_mod( 'default_header_btn2url', '#' ); ?>" class="btn btn-md btn-not"><?php echo get_theme_mod( 'default_header_btn2', 'Download Now' ); ?></a>
			</div>
		</div>
	</div>
</div>
</section><!--hero-->