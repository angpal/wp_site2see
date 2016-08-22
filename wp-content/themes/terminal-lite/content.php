<?php
/**
 * @package Terminal Lite
 */
?>
<div class="blog-post-repeat">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <?php if ( 'post' == get_post_type() ) : ?>
                <div class="postmeta">
                	<div class="post-date"><i class="fa fa-user"></i> <?php _e('By','terminal-lite'); ?> <?php echo get_the_author(); ?></div> | 
                    <div class="post-date"><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></div>
                    <div class="post-comment"> | <i class="fa fa-comments-o"></i> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>
                    <div class="post-categories"> | <?php the_category( __( ', ', 'terminal-lite' ));?></div>
                    <div class="clear"></div>
                </div><!-- postmeta -->
            <?php endif; ?>
	        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
	            <div class="post-thumb"><?php the_post_thumbnail('medium', array('class' => 'alignleft') ); ?>
	        <?php else : ?>
	            <div class="post-thumb"><?php the_post_thumbnail(); ?>
	        <?php endif; ?>
            </div><!-- post-thumb -->
        </header><!-- .entry-header -->
    
        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
                <p class="read-more"><a href="<?php the_permalink(); ?>"><?php _e('Read More &raquo;','terminal-lite'); ?></a></p>
            </div><!-- .entry-summary -->
        <?php else : ?>
            <div class="entry-content">
                <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'terminal-lite' ) ); ?>
                <?php
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . __( 'Pages:', 'terminal-lite' ),
                        'after'  => '</div>',
                    ) );
                ?>
            </div><!-- .entry-content -->
        <?php endif; ?>
    
        <footer class="entry-meta" style="display:none;">
            <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $categories_list = get_the_category_list( __( ', ', 'terminal-lite' ) );
                    if ( $categories_list && terminal_lite_categorized_blog() ) :
                ?>
                <span class="cat-links">
                    <?php printf( __( 'Posted in %1$s', 'terminal-lite' ), $categories_list ); ?>
                </span>
                <?php endif; // End if categories ?>
    
                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $tags_list = get_the_tag_list( '', __( ', ', 'terminal-lite' ) );
                    if ( $tags_list ) :
                ?>
                <span class="tags-links">
                    <?php printf( __( 'Tagged %1$s', 'terminal-lite' ), $tags_list ); ?>
                </span>
                <?php endif; // End if $tags_list ?>
            <?php endif; // End if 'post' == get_post_type() ?>
    
            <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
            <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'terminal-lite' ), __( '1 Comment', 'terminal-lite' ), __( '% Comments', 'terminal-lite' ) ); ?></span>
            <?php endif; ?>
    
            <?php edit_post_link( __( 'Edit', 'terminal-lite' ), '<span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-meta -->
    </article><!-- #post-## -->
    <div class="spacer20"></div>
</div><!-- blog-post-repeat -->