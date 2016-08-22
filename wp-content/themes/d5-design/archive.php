<?php 
/* 	Design Theme's Archive Page
	Copyright: 2012-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Design 1.0
*/

get_header(); ?>
<div class="pagenev"><div class="conwidth"><?php design_breadcrumbs(); ?></div></div>

<div id="container">

<div id="content">
	<?php if (have_posts()) : ?>
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* If this is a category archive */ if (is_category()) { ?>
		<h1 class="arc-post-title"><?php single_cat_title(); ?></h1><h3 class="arc-src"><?php echo __('now browsing by category', 'd5-design'); ?></h3>
		<?php if(trim(category_description()) != "<br />" && trim(category_description()) != '') { ?>
		<div id="description"><?php echo category_description(); ?></div>
		<?php }?>
		<div class="clear">&nbsp;</div>
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h1 class="arc-post-title"><?php single_tag_title(); ?></h1><h3 class="arc-src"><?php echo __('now browsing by tag', 'd5-design'); ?></h3>
		<div class="clear">&nbsp;</div>
		<div class="tagcloud"><?php wp_tag_cloud(''); ?></div>
		<div class="clear">&nbsp;</div>
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1 class="arc-post-title"><?php echo get_the_date('l, F jS, Y'); ?></h1><h3 class="arc-src"><?php echo __('now browsing by day', 'd5-design'); ?></h3>
		<div class="clear">&nbsp;</div>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1 class="arc-post-title"><?php echo get_the_date('F, Y'); ?></h1><h3 class="arc-src"><?php echo __('now browsing by month', 'd5-design'); ?></h3>
		<div class="clear">&nbsp;</div>
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1 class="arc-post-title"><?php echo get_the_date('Y'); ?></h1><h3 class="arc-src"><?php echo __('now browsing by year', 'd5-design'); ?></h3>
		<div class="clear">&nbsp;</div>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1 class="arc-post-title">Archives</h1><h3 class="arc-src"><?php echo __('now browsing by author', 'd5-design'); ?></h3>
		<div class="clear">&nbsp;</div>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="arc-post-title">Archives</h1><h3 class="arc-src"><?php echo __('now browsing the general archives', 'd5-design'); ?></h3>
 	 	<?php } ?>


		<?php while (have_posts()) : the_post(); ?>
		
			<div <?php post_class(); ?>>
				<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
 <span class="postmetadata"><h3><?php the_time('F j, Y'); ?></h3><div class="content-ver-sep"> </div><h2><?php echo __('By:', 'd5-design'); ?><?php the_author_posts_link() ?></h2><h5> <?php comments_popup_link(__('No Comments &#187;', 'd5-design'), __('1 Comment &#187;', 'd5-design'), __('% Comments &#187;', 'd5-design')); ?></h5><?php echo __('Posted in', 'd5-design'); ?> <?php the_category(', ') ?><?php the_tags('<br />'. __('Tags: ', 'd5-design'), ', ', '<br />'); ?><h5><?php edit_post_link(__('Edit This Post', 'd5-design')); ?></h5></span>	
 <div class="entrytext"><div class="thumb"><?php the_post_thumbnail(); ?></div>
 <?php the_excerpt(); ?>
 <div class="clear"> </div>
 </div></div>
 <div class="content-ver-sep"></div><br />
	
		<?php endwhile; ?>
			
	<div id="page-nav">
	<div class="alignleft"><?php previous_posts_link(__('&laquo; Previous Entries', 'd5-design')) ?></div>
	<div class="alignright"><?php next_posts_link(__('Next Entries &raquo;', 'd5-design')) ?></div>
	</div>

	<?php else : ?>
	
	<h1 class="page-title"><?php _e('Not Found', 'd5-design'); ?></h1>
<h3 class="arc-src"><span><?php _e('Apologies, but the page you requested could not be found. Perhaps searching will help', 'd5-design'); ?></span></h3>

<?php get_search_form(); ?>
<p><a href="<?php echo home_url(); ?>" title="<?php _e('Browse the Home Page', 'd5-design'); ?>">&laquo; <?php _e('Or Return to the Home Page', 'd5-design'); ?></a></p><br /><br />

<h2 class="post-title-color"><?php _e('You can also Visit the Following. These are the Featured Contents', 'd5-design'); ?></h2>
<div class="content-ver-sep"></div><br />
<?php get_template_part( 'featured-box' ); ?>
	
	
	<?php endif; ?>

</div><!--close content id-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>