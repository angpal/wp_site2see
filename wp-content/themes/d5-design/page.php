<?php
/* Design Theme's General Page to display all Pages
	Copyright: 2012-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Design 1.0
*/

 get_header(); ?>
 <div class="pagenev"><div class="conwidth"><?php design_breadcrumbs(); ?></div></div>

<div id="container">
	<div id="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1 class="page-title"><?php the_title(); ?></h1>
			<div class="entrytext">
 <div class="thumb"><?php the_post_thumbnail(); ?></div>
 <?php the_content(); ?>

				<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:','d5-design').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
        <?php endwhile; ?><div class="clear"> </div>
	 <?php edit_post_link(__('Edit This Entry','d5-design'), '<p>', '</p>'); ?>
	<?php comments_template(); ?>
	<?php else: ?>
		<p><?php _e('Sorry, no pages matched your criteria', 'd5-design'); ?></p>
	<?php endif; ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>