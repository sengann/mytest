<?php
/**
 * The template for displaying Single Post content.
 *
 * @package xMag
 * @since xMag 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() && get_theme_mod('xmag_post_featured_image') ) : ?>
	
		<?php if ( get_theme_mod('xmag_post_featured_image_size', 'default') == 'default' ) : ?>
		
			<header class="entry-header has-featured-image">	
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="entry-meta">
					<?php xmag_posted_on(); ?>
					<span class="sep">/</span>
					<?php xmag_entry_comments(); ?>
				</div>
				<figure class="entry-thumbnail">
					<?php the_post_thumbnail('large'); ?>
				</figure>
			</header><!-- .entry-header -->
		
		<?php endif; ?>
	
	<?php else : ?>
	
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<div class="FB-Like">
<!-- Your like button code -->
	<div class="fb-like" 
		data-href="<?php echo wp_get_attachment_url();?>" 
		data-layout="button_count" 
		data-action="like" 
		data-size="small" 
		data-show-faces="true" 
		data-share="true">
	</div>

</div>

			<div class="entry-meta">
				<?php xmag_posted_on(); ?>
				<span class="sep">/</span>
				<?php xmag_entry_comments(); ?>
			</div>
		</header><!-- .entry-header -->
		
	<?php endif; ?>
	
	<center style="font-size:1.1em;">	
	<div class="entry-content">
		<?php 
			the_content();
			wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'xmag' ),
			'after'  => '</div>',
			'link_before' => '<span class="page-number">',
			'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->
		</center>
	<footer class="entry-footer">
		<?php xmag_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<?php
	// Author bio.
	if ( get_the_author_meta( 'description' ) ) :
		get_template_part( 'template-parts/author-bio' );
	endif;
?>

<?php
	the_post_navigation( array(
    	'prev_text'	=> __( 'Previous Post', 'xmag' ) . '<span>%title</span>',
		'next_text'	=> __( 'Next Post', 'xmag' ) . '<span>%title</span>',
	) );
?>